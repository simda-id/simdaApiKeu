<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/'], function() {

    //routes api baru oktober 2019

    Route::get('/getUnit',  'RefUnitController@index');
    Route::get('/FiltUnit',  'RefUnitController@FiltUnit');
    Route::post('/TmbUnit',  'RefUnitController@TmbUnit');
    Route::put('/UbahUnit',  'RefUnitController@UbahUnit');
    Route::delete('/HpsUnit',  'RefUnitController@HpsUnit');

    Route::post('/UserSeeder',   'UserSeederController@apiStore');

    Route::post('/TaSubUnit',   'TaSubUnitController@apiStore');
    
    Route::get('/TaMisi',   'TaMisiController@index');
    Route::post('/TaMisi',   'TaMisiController@apiStore');

    Route::get('/TaTujuan',   'TaTujuanController@index');
    Route::post('/TaTujuan',   'TaTujuanController@apiStore');

    Route::get('/TaSasaran',   'TaSasaranController@index');
    Route::post('/TaSasaran',   'TaSasaranController@apiStore');

    Route::get('/TaProgram',   'TaProgramController@index');
    Route::post('/TaProgram',   'TaProgramController@apiStore');

    Route::get('/TaKegiatan',   'TaKegiatanController@index');
    Route::post('/TaKegiatan',   'TaKegiatanController@apiStore');

    Route::get('/TaCapaianProgram',   'TaCapaianProgramController@index');
    Route::post('/TaCapaianProgram',   'TaCapaianProgramController@apiStore');

    Route::get('/TaIndikator',   'TaIndikatorController@index');
    Route::post('/TaIndikator',   'TaIndikatorController@apiStore');

    Route::get('/TaBelanja',   'TaBelanjaController@index');
    Route::post('/TaBelanja',   'TaBelanjaController@apiStore');

    Route::post('/TaBelanjaHistory',   'TaBelanjaHistoryController@apiStore');

    Route::get('/TaBelanjaItem',   'TaBelanjaItemController@index');
    Route::post('/TaBelanjaItem',   'TaBelanjaItemController@apiStore');

    Route::get('/TaBelanjaLanjutan',   'TaBelanjaLanjutanController@index');
    Route::post('/TaBelanjaLanjutan',   'TaBelanjaLanjutanController@apiStore');

    Route::get('/TaBelanjaRinc',   'TaBelanjaRincController@index');
    Route::post('/TaBelanjaRinc',   'TaBelanjaRincController@apiStore');

    Route::get('/TaBelanjaRincSub',   'TaBelanjaRincSubController@index');
    Route::post('/TaBelanjaRincSub',   'TaBelanjaRincSubController@apiStore');

    Route::get('/TaPendapatan',   'TaPendapatanController@index');
    Route::post('/TaPendapatan',   'TaPendapatanController@apiStore');

    Route::get('/TaPendapatanRinc',   'TaPendapatanRincController@index');
    Route::post('/TaPendapatanRinc',   'TaPendapatanRincController@apiStore');

    Route::get('/TaPembiayaan',   'TaPembiayaanController@index');
    Route::post('/TaPembiayaan',   'TaPembiayaanController@apiStore');

    Route::get('/TaPembiayaanRinc',   'TaPembiayaanRincController@index');
    Route::post('/TaPembiayaanRinc',   'TaPembiayaanRincController@apiStore');
	
	Route::get('/SPRealisasi',   'SPRealisasiController@index');
});
