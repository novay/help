<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
    // $m = new App\Repositories\Eloquent\JenisKelamin;
});
Route::group(['prefix'=>'admin','namespace'=>'Admin'],function ()
{
	Route::group(['prefix'=>'data','namespace'=>'Data'],function ()
	{
		
		Route::group(['prefix'=>'tambahan','namespace'=>'Tambahan'],function (){
			Route::resources([
				'agama' => 'AgamaController',
				'akses_inet' => 'AksesInternetController',
				'jenis_kelamin' => 'JenisKelaminController',
				'suplai_air' => 'SuplaiAirController',
				'sumber_listrik' => 'SumberListrikController',
			]);
		});
		Route::group(['prefix'=>'program','namespace'=>'Program'],function (){
			Route::resources([
				'data_kebutuhan_khusus' => 'DataKebutuhanKhususController',
				'data_layanan_khusus' => 'DataLayananKhususController',
			]);
		});
		Route::group(['prefix'=>'administrasi/sekolah','namespace'=>'Administrasi\Sekolah'],function (){
			Route::resources([
				'status_sekolah' => 'StatusSekolahController',
				'sertifikat_iso' => 'SertifikatIsoController',
				'bentuk_pendidikan' => 'BentukPendidikanController',
				'status_kepemilikan' => 'StatusKepemilikanController',
			]);
		});
		Route::group(['prefix'=>'akreditasi','namespace'=>'Akreditasi'],function (){
			Route::resources([
				'lembaga_akreditasi' => 'LembagaController',
				'nilai_akreditasi' => 'NilaiController',
			]);
		});
		Route::group(['prefix'=>'region','namespace'=>'Region'],function ()
		{
			Route::resources([
				'provinsi'=>'ProvinsiController',
				'kabupaten'=>'KabupatenController',
				'kecamatan'=>'KecamatanController',
				'kelurahan'=>'KelurahanController',
				'kategori_wilayah'=>'KategoriWilayahController',
				]);
		});
		Route::group(['prefix'=>'penyelenggaraan','namespace'=>'Penyelenggaraan'],function ()
		{
			Route::resources([
				'semester'=>'SemesterController',
				'tahun_ajaran'=>'TahunAjaranController',
				'waktu_penyelenggaraan'=>'WaktuPenyelengaraanController',
				]);
		});
	});
	Route::resource('yayasan','YayasanController');
	Route::group(['prefix'=>'sekolah','namespace'=>'Sekolah'],function ()
	{
		Route::group(['prefix'=>'program','namespace'=>'Program'],function ()
		{
			Route::resources([
				'inkuisi'=>'InkuisiController',
				'layanan_khsusus'=>'LayananKhususController'
			]);
		});	
		Route::get('massasigment',['as'=>'massasigment','uses'=>function ()
				{
					return "you found me :V";
				}]);
		Route::resources([
			'akreditasi' => 'AkreditasiController',
			'rekening' => 'RekeningController',
			'perizinan' => 'PerizinanController',
			'lokasi' => 'LokasiSekolahController',
			'periodik' => 'PeriodikController',
			'sanitasi' => 'SanitasiController',
			'sertifikasi' => 'SertifikasiIsoController',
			'siswa' => 'SiswaController',
			'tambahan' => 'TambahanController',
		]);
	});
});