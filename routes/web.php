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

Route::get('/admin_panel', function () {
    return view('home');
});

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
	Route::resource('berita1', 'Beritacontroller');
	Route::resource('katapengantar1', 'Katapengantarcontroller');
	Route::resource('visimisi1', 'Visimisicontroller');
	Route::resource('struktur1', 'Strukturcontroller');
	Route::resource('info1', 'Infocontroller');	
	Route::resource('ebook1', 'Ebookcontroller');
	Route::resource('galeri1', 'Galericontroller');
	Route::resource('foto1', 'Fotocontroller');
	Route::resource('hubungi1', 'Hubungicontroller');
	Route::resource('pendaftaran1', 'Pendaftarancontroller');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin_panel', function () {
    return redirect('/home');
});

Route::get('/', 'BerandaController@index')->name('');
Route::get('/', function () {
    return redirect('beranda');
});

Route::group(['prefix'=>'','namespace'=>'User'], function(){
	Route::resource('beranda', 'BerandaController');
	Route::resource('kata_pengantar', 'KataPengantarController');
	Route::resource('visi_misi', 'VisiMisiController');
	Route::resource('struktur', 'StrukturController');
	Route::resource('info', 'InfoController');	
	Route::resource('e_book', 'EBookController');
	Route::resource('galeri', 'GaleriController');
	Route::resource('hubungi_kami', 'HubungiController');
	Route::resource('pendaftaran', 'PendaftaranController');
});
