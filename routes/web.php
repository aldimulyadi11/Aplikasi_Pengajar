<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Auth::routes(['register'=>false, 'reset'=>false, 'verify'=>false]);
// Route::group(['middleware' => ['auth']], function() {

	// Route::get('/home', 'HomeController@index')->name('home');
	// Route::get('/','HomeController@index');

Route::get('dashboardAdmin', 'pengajarController@dashboard')->name('dashboard');

Route::get('pengajar/detail/{id}','pengajarController@detail')->name('pengajar.detail');
Route::get('pengajar/detail2/{id}','pengajarController@detail2')->name('pengajar.detail2');
Route::put('pengajar/update2','pengajarController@update2')->name('pengajar.update2');
Route::get('pengajar/status/{id}','pengajarController@status')->name('pengajar.status');
Route::get('pengajar/index2','pengajarController@index2')->name('pengajar.index2');
Route::get('pengajar/filter/{id}','pengajarController@filter')->name('pengajar.filter');
Route::get('pengajar/filter2/{id}','pengajarController@filter2')->name('pengajar.filter2');
Route::get('pengajar/pesan/{id}','pengajarController@pesan')->name('pengajar.pesan');
Route::get('pengajar/profile','pengajarController@profile')->name('pengajar.profile');

Route::get('materi/destroy2/{id}','materiController@destroy2')->name('materi.destroy2');
Route::get('admin/destroy2/{id}','adminController@destroy2')->name('admin.destroy2');
Route::get('logout','adminController@logout')->name('admin.logout');
Route::get('logout2','adminController@logout2')->name('admin.logout2');

Route::get('changePassword/admin','adminController@changePassword')->name('admin.changePassword');
Route::post('changePas/admin','adminController@changePass')->name('admin.changePass');

Route::get('changePassword/user','userController@changePassword')->name('user.changePassword');
Route::post('changePass/user','userController@changePass')->name('user.changePass');
Route::put('user/update3/{id}','userController@update3')->name('user.update3');

Route::resource('/pengajar','pengajarController');
Route::resource('/materi','materiController');
Route::resource('/admin','adminController');

Route::get('detailMateri/index/{id}','detailMateriController@index')->name('detailMateri.index');
Route::get('detailMateri/create/{id}','detailMateriController@create')->name('detailMateri.create');
Route::post('detailMateri/store/{id}','detailMateriController@store')->name('detailMateri.store');
Route::get('detailMateri/edit/{id}','detailMateriController@edit')->name('detailMateri.edit');
Route::put('detailMateri/update/{id}','detailMateriController@update')->name('detailMateri.update');
Route::get('detailMateri/destroy/{id}','detailMateriController@destroy')->name('detailMateri.destroy');	

Route::get('/','userController@index')->name('user.index');

Route::get('user/index','userController@indexId')->name('user.indexId');	
Route::get('user/create','userController@register')->name('user.register');
Route::get('user/create/pengajar','userController@registerPengajar')->name('user.registerPengajar');
Route::get('user/create/pelajar','userController@registerPelajar')->name('user.registerPelajar');

Route::get('user/data/materi','userController@dataMateri')->name('user.dataMateri');
Route::get('user/data/pengajar','userController@dataPengajar')->name('user.dataPengajar');

Route::post('user/store','userController@store')->name('user.store');
Route::get('login','userController@login')->name('user.login');
Route::post('user/loginPost','userController@loginPost')->name('user.loginPost');

Route::get('editUser/user/{id}','userController@editUser')->name('user.editUser');
Route::post('editUserStore/user/{id}','userController@editUserStore')->name('user.editUserStore');

Route::get('tambahMateri/user/{id}','userController@tambahMateri')->name('user.tambahMateri');
Route::post('tambahMateriStore/user/{id}','userController@tambahMateriStore')->name('user.tambahMateriStore');

Route::get('pesan','pesanController@pesan')->name('pesan');
Route::get('pesan/{id}','pesanController@pesanDetail')->name('pesanDetail');
Route::post('pesan/store','pesanController@store')->name('pesan.store');
Route::post('pesan/store2','pesanController@store2')->name('pesan.store2');
Route::post('pesan/store3/{id}','pesanController@store3')->name('pesan.store3');
// });
