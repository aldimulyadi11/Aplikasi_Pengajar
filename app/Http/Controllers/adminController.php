<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Ramsey\Uuid\Uuid;

class adminController extends Controller
{
  public function index()
  {
    $admins = admin::all();
    return view('admin.dataAdmin.index',['admins'=>$admins, 'no'=>1]);
  }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('admin.dataAdmin.create');   
    }

    public function login()
    {
      return view('admin.dataAdmin.login');   
    }

    public function store(Request $request)
    {        
      $this->validate($request,[
        'nama' => 'required|max:100',
        'username' => 'required|max:100',        
        'password' => 'required',
        'confir_password' => 'required|same:password',        
      ]);

      try {
        $req = $request->all();

        $uuid = Uuid::uuid1();

        admin::create([
          'id' => $uuid->toString(),
          'nama' => $req['nama'],
          'username' => $req['username'],
          'password'=>bcrypt($req['password']),
          'status' => 'Admin',
        ]);
        return redirect()
        ->route('admin.index')
        ->with('alert-success', 'admin Berhasil Disimpan.');

      }catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('admin.create')
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
      $admins = admin::find($id);
      return view('admin.dataAdmin.edit',['admins'=>$admins]);
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
        'nama' => 'required|max:100',
        'username' => 'required|max:100',                
      ]);      

      try {

        $admin = admin::findOrFail($id);
        $admin->nama = $request->nama;
        $admin->username = $request->username;            
        $admin->save();

        return redirect()
        ->route('admin.index')
        ->with('alert-success', 'admin berhasil diupdate.');

      }
      catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('admin.index')
        ->with('error', 'Data tidak ditemukan.');
      }
    }  

    public function destroy($id)
    {        
    }
    public function destroy2($id)
    {
      $id_admin = Session::get('id_admin');
      if($id == $id_admin){
        return redirect()
        ->route('admin.index')
        ->with('alert', 'admin sedang digunakan.');        
      }
      try {
        $admin = admin::findOrFail($id)->delete();

        return redirect()
        ->route('admin.index')
        ->with('alert-success', 'admin berhasil dihapus.');

      } catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()
        ->route('admin.index')
        ->with('error', 'Data tidak ditemukan.');
      }
    }

    public function logout(Request $request){
      Session::flush();
      return redirect('login');
    }
    public function logout2(Request $request){
      Session::flush();
      return redirect('/');
    }
    public function changePassword()
    {
      return view('user.change');
    }

    public function changePass(Request $request){    

      $id = Session::get('id_admin');
      $pengajar = admin::findOrFail($id);
      $pengajar->password = bcrypt($request->new_pass);
      $pengajar->save();

      Session::flush();
      return redirect('login');      

    }

  }
