<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\materi;
use App\detailMateri;
use Ramsey\Uuid\Uuid;

class detailMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {        
        $detailMateri = detailMateri::where('id_pengajar',$id)->get();
        return view('admin.detailMateri.index',['detailMateri'=>$detailMateri, 'no'=>1, 'id'=>$id,]);     
    }

    public function create($id)
    {
        $materis = materi::all();
        return view('admin.detailMateri.create',['materis'=>$materis, 'id'=>$id]);     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {        
      $this->validate($request,[        
        'id_materi' => 'required',
    ]);

      try {
        $req = $request->all();

        $uuid = Uuid::uuid1();

        detailMateri::create([
          'id' => $uuid->toString(),          
          'id_materi' => $req['id_materi'],
          'id_pengajar' => $req['id_pengajar'],          
      ]);
        return redirect()
        ->route('detailMateri.index', $id)
        ->with('alert-success', 'materi Berhasil Disimpan.');

    }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('detailMateri.create', $id)
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
        $materis = materi::all();
        $detailMateris = detailMateri::find($id);
        return view('admin.detailMateri.edit',['detailMateris'=>$detailMateris, 'materis'=>$materis, 'id'=>$id]);
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
        'id_materi' => 'required',        
    ]);      
      try {

        $materi = detailMateri::findOrFail($id);
        $materi->id_materi = $request->id_materi;
        $materi->id_pengajar = $request->id_pengajar;            
        $materi->save();

        return redirect()
        ->route('detailMateri.index', $id)
        ->with('alert-success', 'materi Berhasil Diupdate.');

    }
    catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
      return redirect()
      ->route('detailMateri.edit', $id)
      ->with('error', 'Data tidak ditemukan.');
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
            $detailMateri = detailMateri::findOrFail($id)->delete();

          return redirect()
          ->route('detailMateri.index', $id)
          ->with('alert-success', 'detail Materi berhasil dihapus.');

      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
          return redirect()
          ->route('detailMateri.index', $id)
          ->with('error', 'Data tidak ditemukan.');
      }
  }    
}
