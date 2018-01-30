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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth']], function() {


	Route::get('/home', 'HomeController@index');


	Route::resource('users','UserController');
	Route::get('users.download', 'UserController@downloadUser')->name('users.download');

	//route roles auth
	Route::get('roles',['as'=>'roles.index','uses'=>'RoleController@index','middleware' => ['permission:role-list|role-create|role-edit|role-delete']]);

	Route::get('roles/create',['as'=>'roles.create','uses'=>'RoleController@create','middleware' => ['permission:role-create']]);

	Route::post('roles/create',['as'=>'roles.store','uses'=>'RoleController@store','middleware' => ['permission:role-create']]);

	Route::get('roles/{id}',['as'=>'roles.show','uses'=>'RoleController@show']);

	Route::get('roles/{id}/edit',['as'=>'roles.edit','uses'=>'RoleController@edit','middleware' => ['permission:role-edit']]);

	Route::patch('roles/{id}',['as'=>'roles.update','uses'=>'RoleController@update','middleware' => ['permission:role-edit']]);

	Route::delete('roles/{id}',['as'=>'roles.destroy','uses'=>'RoleController@destroy','middleware' => ['permission:role-delete']]);

	//route item role auth
	Route::get('itemCRUD2',['as'=>'itemCRUD2.index','uses'=>'ItemCRUD2Controller@index','middleware' => ['permission:item-list|item-create|item-edit|item-delete']]);

	Route::get('itemCRUD2/create',['as'=>'itemCRUD2.create','uses'=>'ItemCRUD2Controller@create','middleware' => ['permission:item-create']]);

	Route::post('itemCRUD2/create',['as'=>'itemCRUD2.store','uses'=>'ItemCRUD2Controller@store','middleware' => ['permission:item-create']]);

	Route::get('itemCRUD2/{id}',['as'=>'itemCRUD2.show','uses'=>'ItemCRUD2Controller@show']);

	Route::get('itemCRUD2/{id}/edit',['as'=>'itemCRUD2.edit','uses'=>'ItemCRUD2Controller@edit','middleware' => ['permission:item-edit']]);

	Route::patch('itemCRUD2/{id}',['as'=>'itemCRUD2.update','uses'=>'ItemCRUD2Controller@update','middleware' => ['permission:item-edit']]);

	Route::delete('itemCRUD2/{id}',['as'=>'itemCRUD2.destroy','uses'=>'ItemCRUD2Controller@destroy','middleware' => ['permission:item-delete']]);

	//route humas role auth
	Route::get('humas',['as'=>'humas.index','uses'=>'HumasController@index','middleware' => ['permission:humas-list|humas-create|humas-edit|humas-delete']]);

	Route::get('humas/create',['as'=>'humas.create','uses'=>'HumasController@create','middleware' => ['permission:humas-create']]);

	Route::post('humas/create',['as'=>'humas.store','uses'=>'HumasController@store','middleware' => ['permission:humas-create']]);

	Route::get('humas/{id}',['as'=>'humas.show','uses'=>'HumasController@show']);

	Route::get('humas/{id}/edit',['as'=>'humas.edit','uses'=>'HumasController@edit','middleware' => ['permission:humas-edit']]);

	Route::patch('humas/{id}',['as'=>'humas.update','uses'=>'HumasController@update','middleware' => ['permission:humas-edit']]);

	Route::delete('humas/{id}',['as'=>'humas.destroy','uses'=>'HumasController@destroy','middleware' => ['permission:humas-delete']]);

	Route::get('humas.laporan',['as'=>'humas.laporan','uses'=>'HumasController@laporanHumas','middleware' => ['permission:humas-laporan']]);

	Route::get('humas.download',['as'=>'humas.download','uses'=>'HumasController@downloadHumas','middleware' => ['permission:humas-download']]);

	//route unit kerja role auth
	Route::get('unit_kerja',['as'=>'unit_kerja.index','uses'=>'UnitKerjaController@index','middleware' => ['permission:unit_kerja-list|unit_kerja-create|unit_kerja-edit|unit_kerja-delete']]);

	Route::get('unit_kerja/create',['as'=>'unit_kerja.create','uses'=>'UnitKerjaController@create','middleware' => ['permission:unit_kerja-create']]);

	Route::post('unit_kerja/create',['as'=>'unit_kerja.store','uses'=>'UnitKerjaController@store','middleware' => ['permission:unit_kerja-create']]);

	Route::get('unit_kerja/{id}',['as'=>'unit_kerja.show','uses'=>'UnitKerjaController@show']);

	Route::get('unit_kerja/{id}/edit',['as'=>'unit_kerja.edit','uses'=>'UnitKerjaController@edit','middleware' => ['permission:unit_kerja-edit']]);

	Route::patch('unit_kerja/{id}',['as'=>'unit_kerja.update','uses'=>'UnitKerjaController@update','middleware' => ['permission:unit_kerja-edit']]);

	Route::delete('unit_kerja/{id}',['as'=>'unit_kerja.destroy','uses'=>'UnitKerjaController@destroy','middleware' => ['permission:unit_kerja-delete']]);


	//route jabatan role auth
	Route::get('jabatan',['as'=>'jabatan.index','uses'=>'JabatanController@index','middleware' => ['permission:jabatan-list|jabatan-create|jabatan-edit|jabatan-delete']]);

	Route::get('jabatan/create',['as'=>'jabatan.create','uses'=>'JabatanController@create','middleware' => ['permission:jabatan-create']]);

	Route::post('jabatan/create',['as'=>'jabatan.store','uses'=>'JabatanController@store','middleware' => ['permission:jabatan-create']]);

	Route::get('jabatan/{id}',['as'=>'jabatan.show','uses'=>'JabatanController@show']);

	Route::get('jabatan/{id}/edit',['as'=>'jabatan.edit','uses'=>'JabatanController@edit','middleware' => ['permission:jabatan-edit']]);

	Route::patch('jabatan/{id}',['as'=>'jabatan.update','uses'=>'JabatanController@update','middleware' => ['permission:jabatan-edit']]);

	Route::delete('jabatan/{id}',['as'=>'jabatan.destroy','uses'=>'JabatanController@destroy','middleware' => ['permission:jabatan-delete']]);

	//route complaint role auth
	Route::get('complaint',['as'=>'complaint.index','uses'=>'ComplaintController@index','middleware' => ['permission:complaint-list|complaint-create|complaint-edit|complaint-delete']]);

	Route::get('complaint/create',['as'=>'complaint.create','uses'=>'ComplaintController@create','middleware' => ['permission:complaint-create']]);

	Route::post('complaint/create',['as'=>'complaint.store','uses'=>'ComplaintController@store','middleware' => ['permission:complaint-create']]);

	Route::get('complaint/{id}',['as'=>'complaint.show','uses'=>'ComplaintController@show']);

	Route::get('complaint/{id}/edit',['as'=>'complaint.edit','uses'=>'ComplaintController@edit','middleware' => ['permission:complaint-edit']]);

	Route::patch('complaint/{id}',['as'=>'complaint.update','uses'=>'ComplaintController@update','middleware' => ['permission:complaint-edit']]);

	Route::delete('complaint/{id}',['as'=>'complaint.destroy','uses'=>'ComplaintController@destroy','middleware' => ['permission:complaint-delete']]);

	Route::get('complaint.laporan',['as'=>'complaint.laporan','uses'=>'ComplaintController@laporanComplaint','middleware' => ['permission:complaint-laporan']]);

	Route::get('complaint.download',['as'=>'complaint.download','uses'=>'ComplaintController@downloadComplaint','middleware' => ['permission:complaint-download']]);

	//karyawan route auth
	Route::get('karyawan',['as'=>'karyawan.index','uses'=>'KaryawanController@index','middleware' => ['permission:karyawan-list|karyawan-create|karyawan-edit|karyawan-delete']]);

	Route::get('karyawan/create',['as'=>'karyawan.create','uses'=>'KaryawanController@create','middleware' => ['permission:karyawan-create']]);

	Route::post('karyawan/create',['as'=>'karyawan.store','uses'=>'KaryawanController@store','middleware' => ['permission:karyawan-create']]);

	Route::get('karyawan/{id}',['as'=>'karyawan.show','uses'=>'KaryawanController@show']);

	Route::get('karyawan/{id}/edit',['as'=>'karyawan.edit','uses'=>'KaryawanController@edit','middleware' => ['permission:karyawan-edit']]);

	Route::patch('karyawan/{id}',['as'=>'karyawan.update','uses'=>'KaryawanController@update','middleware' => ['permission:karyawan-edit']]);

	Route::delete('karyawan/{id}',['as'=>'karyawan.destroy','uses'=>'KaryawanController@destroy','middleware' => ['permission:karyawan-delete']]);


	//cuti route auth
	Route::get('cuti',['as'=>'cuti.index','uses'=>'CutiController@index','middleware' => ['permission:cuti-list|cuti-create|cuti-edit|cuti-delete']]);

	Route::get('cuti/create',['as'=>'cuti.create','uses'=>'CutiController@create','middleware' => ['permission:cuti-create']]);

	Route::post('cuti/create',['as'=>'cuti.store','uses'=>'CutiController@store','middleware' => ['permission:cuti-create']]);

	Route::get('cuti/{id}',['as'=>'cuti.show','uses'=>'CutiController@show']);

	Route::get('cuti/{id}/edit',['as'=>'cuti.edit','uses'=>'CutiController@edit','middleware' => ['permission:cuti-edit']]);

	Route::patch('cuti/{id}',['as'=>'cuti.update','uses'=>'CutiController@update','middleware' => ['permission:cuti-edit']]);

	Route::delete('cuti/{id}',['as'=>'cuti.destroy','uses'=>'CutiController@destroy','middleware' => ['permission:cuti-delete']]);


});
