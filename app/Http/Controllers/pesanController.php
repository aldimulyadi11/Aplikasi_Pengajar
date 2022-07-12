<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pesan;
use Ramsey\Uuid\Uuid;
use Mail;
class pesanController extends Controller
{
    public function pesan()
    {        
        $pesan = pesan::all();
        return view('pesan.pesan',['pesan'=>$pesan, 'no'=>1]);
    }
    public function pesanDetail($id)
    {        
        $pesan = pesan::findOrFail($id);
        return view('pesan.pesanDetail',['pesan'=>$pesan, 'id'=>$id]);
    }

    public function store(Request $request)
    {
        try {
            $req = $request->all();

            $uuid = Uuid::uuid1();

            pesan::create([
              'id' => $uuid->toString(),
              'nama' => $req['nama'],
              'email' => $req['email'],
              'subject'=>$req['subject'],
              'pesan'=>$req['pesan'],
          ]);
            return redirect()
            ->route('user.index')
            ->with('alert-success', 'pesan Berhasil Disimpan.');

        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return redirect()
            ->route('user.index')
            ->with('error', $e->toString());
        }
    }

    public function store2(Request $request)
    {
        try {
            $req = $request->all();

            $uuid = Uuid::uuid1();

            pesan::create([
              'id' => $uuid->toString(),
              'nama' => $req['nama'],
              'email' => $req['email'],
              'subject'=>$req['subject'],
              'pesan'=>$req['pesan'],
          ]);
            return redirect()
            ->route('user.indexId')
            ->with('alert-success', 'pesan Berhasil Disimpan.');

        }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
            return redirect()
            ->route('user.indexId')
            ->with('error', $e->toString());
        }
    }

    public function store3(Request $request, $id)
    {             
        $pesan = pesan::findOrFail($id);        

        try{   
            Mail::send('admin.dataPengajar.email4',['nama'=>$pesan->nama], function ($message) use ($request){

              $message->subject('Pengajar Announcement');
              $message->from('luginameilani96f@gmail.com');
              $message->to($request->email);
          });                        
            return redirect()
            ->route('pesan')
            ->with('alert-success', 'Pesan Berhasil Dikonfirmasi.');

        }catch(exception $e){
            return redirect()
            ->route('pesan')
            ->with('alert', 'Gagal.');
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


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
}
