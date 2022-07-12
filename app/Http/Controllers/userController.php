<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengajar;
use App\materi;
use App\detailMateri;
use App\admin;
use App\pesan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;

class userController extends Controller
{

  public function index()
  {    

    $pengajar = Pengajar::count();
    $materi = materi::count();
    $pengajar2 = Pengajar::orderBy('created_at','DESC')->paginate(4);
    $materi2 = materi::orderBy('created_at','DESC')->paginate(4);
    return view('user.indexUser',['pengajar2'=>$pengajar2,'pengajar'=>$pengajar ,'materi2'=>$materi2, 'materi'=>$materi]);
  }

  public function dataMateri()
  {    

    $pengajar = Pengajar::count();
    $materi = materi::count();
    $pengajar2 = Pengajar::orderBy('created_at','DESC')->paginate(4);
    $materi2 = materi::all();
    return view('user.indexMateri',['pengajar2'=>$pengajar2,'pengajar'=>$pengajar ,'materi2'=>$materi2, 'materi'=>$materi]);
  }
  public function dataPengajar()
  {    

    $pengajar = Pengajar::count();
    $materi = materi::count();
    $pengajar2 = Pengajar::all();
    $materi2 = materi::all();
    return view('user.indexPengajar',['pengajar2'=>$pengajar2,'pengajar'=>$pengajar ,'materi2'=>$materi2, 'materi'=>$materi]);
  }

  public function indexId()
  { 
    if(!Session::get('login2')){
      return redirect('login')->with('alert','You Must Login First');
    }
    else{      

      $id = Session::get('id');

      $pengajar = Pengajar::where('id',$id)->count();
      $materi = detailMateri::where('id_pengajar',$id)->count();
      return view('user.indexUserId',['pengajar'=>$pengajar, 'materi'=>$materi]); 
    }      
  }

  public function register()
  {
    $materi = materi::all();
    return view('user.register',['materi'=>$materi]);     
  }

  public function registerPelajar()
  {
    $materi = materi::all();
    return view('user.registerPelajar',['materi'=>$materi]);     
  }

  public function registerPengajar()
  {
    $materi = materi::all();
    return view('user.registerPengajar',['materi'=>$materi]);     
  }

  public function login()
  {
    return view('user.login');
  }
  public function loginPost(Request $request){

    $username = $request->username;
    $password = $request->password;

    $data = admin::where('username',$username)->first();
    $cnt = admin::where('username',$username)->count();
    if($cnt == 0){
      return redirect('login')->with('alert','Login Failed !');
    }

    $peng = Pengajar::find($data->id);
    
    if($data){
      if($data->status == "Admin"){
        if(Hash::check($password,$data->password)){

          $pengajar = Pengajar::where('status2','TUNDA')->count();
          $pesan = pesan::count();
          Session::put('nama_admin',$data->nama);
          Session::put('login1',TRUE);
          Session::put('id_admin',$data->id);
          Session::put('pengajar',$pengajar);
          Session::put('pesan',$pesan);
          return redirect('dashboardAdmin');
        }
        else{
          return redirect('login')->with('alert','Login Failed !');
        }
      }
      else if($data->status == "Pengajar") {
        if($peng->status=="AKTIF"){
          if(Hash::check($password,$data->password)){
            Session::put('nama_pengajar',$data->nama);
            Session::put('id',$data->id);
            Session::put('login2',TRUE);
            return redirect('user/index');
          }
          else{
            return redirect('login')->with('alert','Login Failed !');
          }
        }
        else{
          return redirect('login')->with('alert','Anda Sudah Tidak Aktif Silahkan Hubungi Pihak Perusahaan !');
        }
      }  
      else{
        return redirect('login')->with('alert','Login Failed !');
      }          
    }
    else{
      return redirect('login')->with('alert','Login Failed!');
    }
  }

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
        'status' => "TIDAK AKTIF",
        'status2' => "TUNDA",
        'id_materi' => $req['id_materi'],
            // 'id_user' => Auth::user()->id
      ]);

      $uuid2 = Uuid::uuid1();

      detailMateri::create([
        'id' => $uuid2->toString(),          
        'id_materi' => $request->id_materi,
        'id_pengajar' => $uuid->toString(),         
      ]);      

      return redirect()
      ->route('user.index')
      ->with('success', 'Lamaran Anda Telah Terkirim. Tunggu Pemberitahuan Kami Lewat Email');

    }catch(Exception $e){
      return redirect()
      ->route('user.register')
      ->with('error', $e->toString());
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

    //   $user = Pengajar::find($id);

    // // get previous Pengajar id
    //   echo $previous = Pengajar::where('id', '<', $user->id)->max('id');

    // // get next Pengajar id
    //   $next = Pengajar::where('id', '>', $user->id)->min('id');

    //   return View::make('pengajar.show')->with('previous', $previous)->with('next', $next);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function changePassword()
    {

      return view('user.changePass');
    }

    public function changePass(Request $request){    


      $id = Session::get('id');
      $pengajar = admin::findOrFail($id);
      $pengajar->username = $request->new_username;
      $pengajar->password = bcrypt($request->new_pass);
      $pengajar->save();

      Session::flush();
      return redirect('login');      

    }
    public function editUser($id)
    {      
      return view('user.confir',compact('id'));
    }

    public function editUserStore(Request $request, $id){    

      $pengajar = admin::findOrFail($id);
      if(Hash::check($request->password,$pengajar->password)){
        return redirect()
        ->route('pengajar.edit', $id);
      }
      else{
        return redirect()
        ->back()
        ->with('alert','Login Failed !');
      }
    }

    public function tambahMateri($id)
    {      
      return view('user.confir2',compact('id'));
    }

    public function tambahMateriStore(Request $request, $id){    

      $pengajar = admin::findOrFail($id);
      if(Hash::check($request->password,$pengajar->password)){
        return redirect()
        ->route('detailMateri.index', $id);
      }
      else{
        return redirect()
        ->back()
        ->with('alert','Login Failed !');
      }
    }

    public function update3(Request $request, $id)
    {      
      $this->validate($request,[        
        'alamat_lengkap' => 'required|max:200',
        'aktivitas' => 'required|max:200',        
        'pendidikan_terakhir' => 'required',        
        'ceritakan_diri' => 'required|max:500',  
      ]);   

      try {        

        $pengajar = Pengajar::findOrFail($id);          
        $pengajar->alamat_lengkap = $request->alamat_lengkap;
        $pengajar->aktivitas = $request->aktivitas;          
        $pengajar->pendidikan_terakhir = $request->pendidikan_terakhir;          
        $pengajar->ceritakan_diri = $request->ceritakan_diri;          
        $pengajar->save();

        return redirect()
        ->route('pengajar.profile')
        ->with('alert-success', 'Profil berhasil diupdate.');

      }
      catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('user.index')
        ->with('alert', 'Data tidak ditemukan.');
      }

    }
  }
