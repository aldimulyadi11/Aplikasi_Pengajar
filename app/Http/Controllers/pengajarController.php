<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajar;
use App\admin;
use App\materi;
use App\detailMateri;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;
use DB;
use Mail;

class pengajarController extends Controller
{

  public function filter($id){    
    $materi = materi::all();
    $pengajars = DB::table('pengajars')
    ->select('pengajars.*','detail_materis.id_materi')
    ->join('detail_materis','pengajars.id','detail_materis.id_pengajar')
    ->where([
      ['pengajars.status2','DITERIMA'],
      ['detail_materis.id_materi',$id],
    ])->get();

    return view('admin.dataPengajar.index',['pengajars'=>$pengajars, 'materi'=>$materi, 'no'=>1]);
  }

  public function filter2($id){


    $materi = materi::all();
    $pengajars = DB::table('pengajars')
    ->select('pengajars.*','detail_materis.id_materi')
    ->join('detail_materis','pengajars.id','detail_materis.id_pengajar')
    ->where([
      ['pengajars.status2','TUNDA'],
      ['detail_materis.id_materi',$id],
    ])->get();

    return view('admin.dataPengajar.index2',['pengajars'=>$pengajars, 'materi'=>$materi, 'no'=>1]);
  }

  public function dashboard()
  {
    if(!Session::get('login1')){
      return redirect('login')->with('alert','You Must Login First');
    }
    else{      
      return view('admin.dashboard');
    }    
  }

  public function index()
  {
    $materi = materi::all();
    $pengajars = Pengajar::where('status2','DITERIMA')->get();
    return view('admin.dataPengajar.index',['pengajars'=>$pengajars, 'materi'=>$materi, 'no'=>1]);
  }  

  public function index2()
  {
    $materi = materi::all();
    $pengajars = Pengajar::where('status2','TUNDA')->get();
    return view('admin.dataPengajar.index2',['pengajars'=>$pengajars, 'materi'=>$materi, 'no'=>1]);
  }

  public function update2(Request $request)
  {

    $pengajar = Pengajar::findOrFail($request->id);

    if($request->status == "Terima"){

      $username = $request->id;
      $password = $request->id;

      admin::create([
        'id' => $request->id,
        'nama' => $request->nama_lengkap,
        'username' => $username,
        'password'=>bcrypt($password),
        'status' => 'Pengajar',
      ]);

      try{   
        Mail::send('admin.dataPengajar.email',['nama'=>$request->nama_lengkap, 'username'=>$username, 'password'=>$password], function ($message) use ($request){

          $message->subject('Recruitment Announcement');
          $message->from('luginameilani96f@gmail.com');
          $message->to($request->email_pengajar);
        });            

        $pengajar->status = "AKTIF";
        $pengajar->status2 = "DITERIMA";
        $pengajar->save();

        return redirect()
        ->route('pengajar.index')
        ->with('alert-success', 'Pengajar Berhasil Ditambahkan.');

      }catch(exception $e){
        return redirect()
        ->route('pengajar.index')
        ->with('alert', 'Gagal.');
      }
    }

    else if($request->status == "Tunda"){

      try{   
        Mail::send('admin.dataPengajar.email2',['nama'=>$request->nama_lengkap], function ($message) use ($request){

          $message->subject('Recruitment Announcement');
          $message->from('luginameilani96f@gmail.com');
          $message->to($request->email_pengajar);
        });                   

        return redirect()
        ->route('pengajar.index')
        ->with('alert-success', 'Succeess.');

      }catch(exception $e){
        return redirect()
        ->route('pengajar.index')
        ->with('alert', 'Gagal.');
      }
    }   

    else if($request->status == "Tolak"){

      try{   
        Mail::send('admin.dataPengajar.email3',['nama'=>$request->nama_lengkap], function ($message) use ($request){

          $message->subject('Recruitment Announcement');
          $message->from('luginameilani96f@gmail.com');
          $message->to($request->email_pengajar);
        });            
        
        $pengajar->status2 = "DITOLAK";
        $pengajar->save();

        return redirect()
        ->route('pengajar.index')
        ->with('alert-success', 'Succeess.');

      }catch(exception $e){
        return redirect()
        ->route('pengajar.index')
        ->with('alert', 'Gagal.');
      }
    }
    

  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {      
      $materi = materi::all();
      return view('admin.dataPengajar.create',compact('materi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'nama_lengkap' => 'required|max:100',
        'nama_panggilan' => 'required|max:100',
        'email_pengajar' => 'required|unique:pengajars|max:100',
        'no_hp' => 'required|max:15',
        'alamat_lengkap' => 'required|max:200',
        'aktivitas' => 'required|max:200',
        'kode_pos' => 'required|max:5',
        'pendidikan_terakhir' => 'required',        
        'ceritakan_diri' => 'required|max:500',
        'foto_ktp' => 'required',
        'foto_ijazah' => 'required',
        'foto_pribadi' => 'required',
        'foto_lainnya' => 'required',
        'id_materi' => 'required',


      ]);


      try {

        $req = $request->all();

        $file = $req['foto_pribadi'];
        $pribadi = time()."_".$file->getClientOriginalName();        
        $tujuan_upload = ('pribadi/pengajar');
        $file->move($tujuan_upload,$pribadi);          

        $file = $req['foto_ktp'];
        $ktp = time()."_".$file->getClientOriginalName();        
        $tujuan_upload = ('ktp/pengajar');
        $file->move($tujuan_upload,$ktp);

        $file = $req['foto_ijazah'];
        $ijazah = time()."_".$file->getClientOriginalName();        
        $tujuan_upload = ('ijazah/pengajar');
        $file->move($tujuan_upload,$ijazah);

        $file = $req['foto_lainnya'];
        $lainnya = time()."_".$file->getClientOriginalName();        
        $tujuan_upload = ('lainnya/pengajar');
        $file->move($tujuan_upload,$lainnya);

        $uuid = Uuid::uuid1();

        Pengajar::create([
          'id' => $uuid->toString(),
          'nama_lengkap' => $req['nama_lengkap'],
          'nama_panggilan' => $req['nama_panggilan'],
          'email_pengajar' => $req['email_pengajar'],
          'no_hp' => $req['no_hp'],
          'alamat_lengkap' => $req['alamat_lengkap'],
          'aktivitas' => $req['aktivitas'],
          'kode_pos' => $req['kode_pos'],
          'pendidikan_terakhir' => $req['pendidikan_terakhir'],          
          'ceritakan_diri' => $req['ceritakan_diri'],
          'foto_pribadi' => $pribadi,
          'foto_ktp' => $ktp,
          'foto_ijazah' => $ijazah,
          'foto_lainnya' => $lainnya,
          'status' => $req['status'],
          'status2' => "DITERIMA",
          'id_materi' => $req['id_materi'],
        ]);

        $id = $uuid->toString();
        $username = $uuid->toString();
        $password = $uuid->toString();

        admin::create([
          'id' => $id,
          'nama' => $request->nama_lengkap,
          'username' => $username,
          'password'=>bcrypt($password),
          'status' => 'Pengajar',
        ]);
        
        try{   
          Mail::send('admin.dataPengajar.email',['nama'=>$request->nama_lengkap, 'username'=>$username, 'password'=>$password], function ($message) use ($request){

            $message->subject('Recruitment Announcement');
            $message->from('luginameilani96f@gmail.com');
            $message->to($request->email_pengajar);
          });

          return redirect()
          ->route('pengajar.index')
          ->with('alert-success', 'Pengajar berhasil disimpan.');

        }catch(exception $e){
          return redirect()
          ->route('pengajar.create')
          ->with('alert', 'Ulangi');
        }

      }catch(Exception $e){
        return redirect()
        ->route('pengajar.create')
        ->with('alert', 'Ulangi');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $pengajars = Pengajar::find($id);
      return view('admin.dataPengajar.edit',['pengajars'=>$pengajars]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request,[
        'nama_lengkap' => 'required|max:100',
        'nama_panggilan' => 'required|max:100',          
        'no_hp' => 'required|max:15',
        'alamat_lengkap' => 'required|max:200',
        'aktivitas' => 'required|max:200',
        'kode_pos' => 'required|max:5',
        'pendidikan_terakhir' => 'required',        
        'ceritakan_diri' => 'required|max:500',  
      ]);

      if($request->foto_pribadi != "" && $request->foto_ktp != "" && $request->foto_ijazah != "" && $request->foto_lainnya != ""){
        try {
          $req = $request->all();

          $file = $req['foto_pribadi'];
          $pribadi = time()."_".$file->getClientOriginalName();        
          $tujuan_upload = ('pribadi/pengajar');
          $file->move($tujuan_upload,$pribadi);          

          $file = $req['foto_ktp'];
          $ktp = time()."_".$file->getClientOriginalName();        
          $tujuan_upload = ('ktp/pengajar');
          $file->move($tujuan_upload,$ktp);

          $file = $req['foto_ijazah'];
          $ijazah = time()."_".$file->getClientOriginalName();        
          $tujuan_upload = ('ijazah/pengajar');
          $file->move($tujuan_upload,$ijazah);

          $file = $req['foto_lainnya'];
          $lainnya = time()."_".$file->getClientOriginalName();        
          $tujuan_upload = ('lainnya/pengajar');
          $file->move($tujuan_upload,$lainnya);

          $pengajar = Pengajar::findOrFail($id);
          $pengajar->nama_lengkap = $req['nama_lengkap'];
          $pengajar->nama_panggilan = $req['nama_panggilan'];
          $pengajar->email_pengajar = $req['email_pengajar'];
          $pengajar->no_hp = $req['no_hp'];
          $pengajar->alamat_lengkap = $req['alamat_lengkap'];
          $pengajar->aktivitas = $req['aktivitas'];
          $pengajar->kode_pos = $req['kode_pos'];
          $pengajar->pendidikan_terakhir = $req['pendidikan_terakhir'];          
          $pengajar->ceritakan_diri = $req['ceritakan_diri'];
          $pengajar->foto_pribadi = $pribadi;
          $pengajar->foto_ijazah = $ijazah;
          $pengajar->foto_ktp = $ktp;
          $pengajar->foto_lainnya = $lainnya;
          $pengajar->save();

          return redirect()
          ->route('pengajar.index')
          ->with('alert-success', 'Pengajar berhasil diupdate.');

        }
        catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
          return redirect()
          ->route('pengajar.index')
          ->with('alert', 'Data tidak ditemukan.');
        }
      }

      else{        

        try {        

          $pengajar = Pengajar::findOrFail($id);
          $pengajar->nama_lengkap = $request->nama_lengkap;
          $pengajar->nama_panggilan = $request->nama_panggilan;
          $pengajar->email_pengajar = $request->email_pengajar;
          $pengajar->no_hp = $request->no_hp;
          $pengajar->alamat_lengkap = $request->alamat_lengkap;
          $pengajar->aktivitas = $request->aktivitas;
          $pengajar->kode_pos = $request->kode_pos;
          $pengajar->pendidikan_terakhir = $request->pendidikan_terakhir;          
          $pengajar->ceritakan_diri = $request->ceritakan_diri;

          if($request->foto_pribadi != ""){
            $file = $request->foto_pribadi;
            $pribadi = time()."_".$file->getClientOriginalName();        
            $tujuan_upload = ('pribadi/pengajar');
            $file->move($tujuan_upload,$pribadi);
            
            $pengajar->foto_pribadi = $pribadi;  
          }

          if($request->foto_ktp != ""){
            $file = $request->foto_ktp;
            $ktp = time()."_".$file->getClientOriginalName();        
            $tujuan_upload = ('ktp/pengajar');
            $file->move($tujuan_upload,$ktp);
            
            $pengajar->foto_ktp = $ktp;  
          }

          if($request->foto_ijazah != ""){
            $file = $request->foto_ijazah;
            $ijazah = time()."_".$file->getClientOriginalName();        
            $tujuan_upload = ('ijazah/pengajar');
            $file->move($tujuan_upload,$ijazah);
            
            $pengajar->foto_ijazah = $ijazah;  
          }

          if($request->foto_lainnya != ""){
            $file = $request->foto_lainnya;
            $lainnya = time()."_".$file->getClientOriginalName();        
            $tujuan_upload = ('lainnya/pengajar');
            $file->move($tujuan_upload,$lainnya);
            
            $pengajar->foto_lainnya = $lainnya;  
          }
          
          $pengajar->save();

          return redirect()
          ->route('pengajar.index')
          ->with('alert-success', 'Pengajar berhasil diupdate.');

        }
        catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
          return redirect()
          ->route('pengajar.index')
          ->with('alert', 'Data tidak ditemukan.');
        }

      }         
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function status($id)
    {
      $cek = Pengajar::select('status')->find($id);
      
      if($cek->status == "AKTIF"){
        $status = Pengajar::find($id);        
        $status->status = "TIDAK AKTIF";
        $status->save();
      }
      if($cek->status == "TIDAK AKTIF"){        
        $status = Pengajar::find($id);
        $status->status = "AKTIF";
        $status->save();  
      }

      return redirect()
      ->route('pengajar.index')
      ->with('alert-success', 'Status Berhasil Diubah.');

      

    }
    public function detail($id)
    {
      $pengajars = Pengajar::find($id);      
      return view('admin.dataPengajar.detail',['pengajars'=>$pengajars]);
    }
    public function detail2($id)
    {
      $pengajars = Pengajar::find($id);
      $materi = DB::table('detail_materis')
      ->select('nama_materi')
      ->join('materis','materis.id','detail_materis.id_materi')
      ->join('pengajars','pengajars.id','detail_materis.id_pengajar')
      ->where('pengajars.id',$id)
      ->get();
      return view('admin.dataPengajar.detail2',['pengajars'=>$pengajars, 'materi'=>$materi]);
    }
    public function profile()
    {
      $id = Session::get('id');
      $pengajars = Pengajar::find($id);      
      return view('user.profile',['pengajars'=>$pengajars]);
    }
    
  }
