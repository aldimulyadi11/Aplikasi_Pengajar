<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materi;
use Ramsey\Uuid\Uuid;

class materiController extends Controller
{
  public function index()
  {

    $materis = materi::all();
    return view('admin.dataMateri.index',['materis'=>$materis, 'no'=>1]);
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.dataMateri.create');   
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
        'nama_materi' => 'required|max:100',
        'foto_materi' => 'required',
    ]);

      try {
        $req = $request->all();

        $file = $req['foto_materi'];
        $materi = time()."_".$file->getClientOriginalName();        
        $tujuan_upload = ('foto/materi');
        $file->move($tujuan_upload,$materi);          

        $uuid = Uuid::uuid1();

        materi::create([
          'id' => $uuid->toString(),
          'nama_materi' => $req['nama_materi'],          
          'foto_materi' => $materi,
      ]);
        return redirect()
        ->route('materi.index')
        ->with('alert-success', 'Materi Berhasil Disimpan.');

    }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('materi.create')
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
      $materis = materi::find($id);
      return view('admin.dataMateri.edit',['materis'=>$materis]);
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
        'nama_materi' => 'required|max:100',
    ]);

      if($request->foto_materi != "")
      {

          try {

            $file = $request->foto_materi;
            $materi = time()."_".$file->getClientOriginalName();        
            $tujuan_upload = ('foto/materi');
            $file->move($tujuan_upload,$materi);

            $materi = materi::findOrFail($id);
            $materi->nama_materi = $request->nama_materi;            
            $materi->foto_materi = $materi;
            $materi->save();

            return redirect()
            ->route('materi.index')
            ->with('alert-success', 'Materi Berhasil Diupdate.');

        }
        catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
          return redirect()
          ->route('materi.index')
          ->with('error', 'Data tidak ditemukan.');
      }
  }  
  else
  {
      try {

        $materi = materi::findOrFail($id);
        $materi->nama_materi = $request->nama_materi;
        $materi->save();

        return redirect()
        ->route('materi.index')
        ->with('alert-success', 'Materi berhasil diupdate.');

    }
    catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
      return redirect()
      ->route('materi.index')
      ->with('error', 'Data tidak ditemukan.');
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
        try {
          $materi = materi::findOrFail($id)->delete();

          return redirect()
          ->route('materi.index')
          ->with('success', 'Materi berhasil dihapus.');

      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
          return redirect()
          ->route('materi.index')
          ->with('error', 'Data tidak ditemukan.');
      }
  }
  public function destroy2($id)
  {

    try {
      $materi = materi::findOrFail($id)->delete();

      return redirect()
      ->route('materi.index')
      ->with('alert-success', 'Materi berhasil dihapus.');

  } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
      return redirect()
      ->route('materi.index')
      ->with('error', 'Data tidak ditemukan.');
  }
}
}
