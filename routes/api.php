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
    //Update tgl 12-12-2019
    Route::get('/getFungsi',  'RefFungsiController@index');    
    Route::post('/BulkFungsi',  'RefFungsiController@apistore');   
    Route::post('/TmbFungsi',  'RefFungsiController@TmbFungsi');
    Route::put('/UbahFungsi',  'RefFungsiController@UbahFungsi');
    Route::delete('/HpsFungsi',  'RefFungsiController@HpsFungsi');

    Route::get('/getUrusan',  'RefUrusanController@index');
    Route::get('/FiltUrusan',  'RefUrusanController@FiltUrusan');      
    Route::post('/BulkUrusan',  'RefUrusanController@apistore');  
    Route::post('/TmbUrusan',  'RefUrusanController@TmbUrusan');
    Route::put('/UbahUrusan',  'RefUrusanController@UbahUrusan');
    Route::delete('/HpsUrusan',  'RefUrusanController@HpsUrusan');
    
    Route::get('/getBidang',  'RefBidangController@index');
    Route::get('/FiltBidang',  'RefBidangController@FiltBidang');      
    Route::post('/BulkBidang',  'RefBidangController@apistore');   
    Route::post('/TmbBidang',  'RefBidangController@TmbBidang');
    Route::put('/UbahBidang',  'RefBidangController@UbahBidang');
    Route::delete('/HpsBidang',  'RefBidangController@HpsBidang');

    //Update tgl 13-12-2019
    Route::get('/getUnit',  'RefUnitController@index');
    Route::get('/FiltUnit',  'RefUnitController@FiltUnit');    
    Route::post('/BulkUnit',  'RefUnitController@apistore');  
    Route::post('/TmbUnit',  'RefUnitController@TmbUnit');
    Route::put('/UbahUnit',  'RefUnitController@UbahUnit');
    Route::delete('/HpsUnit',  'RefUnitController@HpsUnit');

    Route::get('/getSubUnit',  'RefSubUnitController@index');
    Route::get('/FiltSubUnit',  'RefSubUnitController@FiltSubUnit');  
    Route::post('/BulkSubUnit',  'RefSubUnitController@apistore'); 
    Route::post('/TmbSubUnit',  'RefSubUnitController@TmbSubUnit');
    Route::put('/UbahSubUnit',  'RefSubUnitController@UbahSubUnit');
    Route::delete('/HpsSubUnit',  'RefSubUnitController@HpsSubUnit');

    Route::get('/getProgram',   'RefProgramController@index');
    Route::get('/FiltProgram',   'RefProgramController@FiltProgram');
    Route::post('/BulkProgram',  'RefProgramController@apistore'); 
    Route::post('/TmbProgram',   'RefProgramController@TmbProgram');
    Route::put('/UbahProgram',   'RefProgramController@UbahProgram');
    Route::delete('/HpsProgram',   'RefProgramController@HpsProgram');
    Route::delete('/HpsProgramAll',   'RefProgramController@HpsProgramAll');

    Route::get('/getKegiatan',   'RefKegiatanController@index');
    Route::get('/FiltKegiatan',   'RefKegiatanController@FiltKegiatan');
    Route::post('/BulkKegiatan',  'RefKegiatanController@apistore'); 
    Route::post('/TmbKegiatan',   'RefKegiatanController@TmbKegiatan');
    Route::put('/UbahKegiatan',   'RefKegiatanController@UbahKegiatan');
    Route::delete('/HpsKegiatan',   'RefKegiatanController@HpsKegiatan');
    Route::delete('/HpsKegiatanAll',   'RefKegiatanController@HpsKegiatanAll');

    //Update tgl 16-12-2019

    Route::get('/getRek1',   'RefRek1Controller@index');
    Route::post('/BulkRek1',  'RefRek1Controller@apistore'); 
    Route::post('/TmbRek1',   'RefRek1Controller@TmbRek1');
    Route::put('/UbahRek1',   'RefRek1Controller@UbahRek1');

    Route::get('/getRek2',   'RefRek2Controller@index');
    Route::post('/BulkRek2',  'RefRek2Controller@apistore'); 
    Route::get('/FiltRek2',   'RefRek2Controller@FiltRek2');
    Route::post('/TmbRek2',   'RefRek2Controller@TmbRek2');
    Route::put('/UbahRek2',   'RefRek2Controller@UbahRek2');

    Route::get('/getRek3',   'RefRek3Controller@index');
    Route::post('/BulkRek3',  'RefRek3Controller@apistore'); 
    Route::get('/FiltRek3',   'RefRek3Controller@FiltRek3');
    Route::post('/TmbRek3',   'RefRek3Controller@TmbRek3');
    Route::put('/UbahRek3',   'RefRek3Controller@UbahRek3');

    Route::get('/getRek4',   'RefRek4Controller@index');
    Route::post('/BulkRek4',  'RefRek4Controller@apistore'); 
    Route::get('/FiltRek4',   'RefRek4Controller@FiltRek4');
    Route::post('/TmbRek4',   'RefRek4Controller@TmbRek4');
    Route::put('/UbahRek4',   'RefRek4Controller@UbahRek4');

    Route::get('/getRek5',   'RefRek5Controller@index');
    Route::get('/FiltRek5',   'RefRek5Controller@FiltRek5');
    Route::post('/TmbRek5',   'RefRek5Controller@TmbRek5');
    Route::put('/UbahRek5',   'RefRek5Controller@UbahRek5');
    Route::delete('/HpsRek5',   'RefRek5Controller@HpsRek5');

    //Update tgl 31-12-2019
    Route::get('/getSumberDana',   'RefSumberDanaController@index');
    Route::post('/BulkSumberDana',   'RefSumberDanaController@apiStore');
    Route::get('/FiltSumberDana',   'RefSumberDanaController@FiltSumberDana');
    Route::post('/TmbSumberDana',   'RefSumberDanaController@TmbSumberDana');
    Route::put('/UbahSumberDana',   'RefSumberDanaController@UbahSumberDana');
    Route::delete('/HpsSumberDana',   'RefSumberDanaController@HpsSumberDana');

    //Yang lama
    Route::get('/getTaSubUnit',   'TaSubUnitController@index');
    Route::get('/FiltTaSubUnit',   'TaSubUnitController@FiltTaSubUnit');
    Route::post('/TmbTaSubUnit',   'TaSubUnitController@TmbTaSubUnit');
    Route::put('/UbahTaSubUnit',   'TaSubUnitController@UbahTaSubUnit');
    Route::delete('/HpsTaSubUnit',   'TaSubUnitController@HpsTaSubUnit');

    Route::get('/getTaMisi',   'TaMisiController@index');
    Route::get('/FiltTaMisi',   'TaMisiController@FiltTaMisi');
    Route::post('/TmbTaMisi',   'TaMisiController@TmbTaMisi');
    Route::put('/UbahTaMisi',   'TaMisiController@UbahTaMisi');
    Route::delete('/HpsTaMisi',   'TaMisiController@HpsTaMisi');

    Route::get('/getTaTujuan',   'TaTujuanController@index');
    Route::get('/FiltTaTujuan',   'TaTujuanController@FiltTaTujuan');
    Route::post('/TmbTaTujuan',   'TaTujuanController@TmbTaTujuan');
    Route::put('/UbahTaTujuan',   'TaTujuanController@UbahTaTujuan');
    Route::delete('/HpsTaTujuan',   'TaTujuanController@HpsTaTujuan');

    Route::get('/getTaSasaran',   'TaSasaranController@index');
    Route::get('/FiltTaSasaran',   'TaSasaranController@FiltTaSasaran');
    Route::post('/TmbTaSasaran',   'TaSasaranController@TmbTaSasaran');
    Route::put('/UbahTaSasaran',   'TaSasaranController@UbahTaSasaran');
    Route::delete('/HpsTaSasaran',   'TaSasaranController@HpsTaSasaran');

    Route::get('/getTaProgram',   'TaProgramController@index');
    Route::get('/FiltTaProgram',   'TaProgramController@FiltTaProgram');
    Route::post('/TmbTaProgram',   'TaProgramController@TmbTaProgram');
    Route::put('/UbahTaProgram',   'TaProgramController@UbahTaProgram');
    Route::delete('/HpsTaProgram',   'TaProgramController@HpsTaProgram');

    Route::get('/getTaKegiatan',   'TaKegiatanController@index');
    Route::get('/FiltTaKegiatan',   'TaKegiatanController@FiltTaKegiatan');
    Route::post('/TmbTaKegiatan',   'TaKegiatanController@TmbTaKegiatan');
    Route::put('/UbahTaKegiatan',   'TaKegiatanController@UbahTaKegiatan');
    Route::delete('/HpsTaKegiatan',   'TaKegiatanController@HpsTaKegiatan');

    Route::get('/getTaBelanjaRincSub',   'TaBelanjaRincSubController@index');
    Route::get('/FiltTaBelanjaRincSub',   'TaBelanjaRincSubController@FiltTaBelanjaRincSub');
    Route::post('/TmbTaBelanjaRincSub',   'TaBelanjaRincSubController@TmbTaBelanjaRincSub');
    Route::put('/UbahTaBelanjaRincSub',   'TaBelanjaRincSubController@UbahTaBelanjaRincSub');
    Route::delete('/HpsTaBelanjaRincSub',   'TaBelanjaRincSubController@HpsTaBelanjaRincSub');

    Route::get('/getTaBelanjaRinc',   'TaBelanjaRincController@index');
    Route::get('/FiltTaBelanjaRinc',   'TaBelanjaRincController@FiltTaBelanjaRinc');
    Route::post('/TmbTaBelanjaRinc',   'TaBelanjaRincController@TmbTaBelanjaRinc');
    Route::put('/UbahTaBelanjaRinc',   'TaBelanjaRincController@UbahTaBelanjaRinc');
    Route::delete('/HpsTaBelanjaRinc',   'TaBelanjaRincController@HpsTaBelanjaRinc');

    Route::get('/getTaBelanja',   'TaBelanjaController@index');
    Route::get('/FiltTaBelanja',   'TaBelanjaController@FiltTaBelanja');
    Route::post('/TmbTaBelanja',   'TaBelanjaController@TmbTaBelanja');
    Route::put('/UbahTaBelanja',   'TaBelanjaController@UbahTaBelanja');
    Route::delete('/HpsTaBelanja',   'TaBelanjaController@HpsTaBelanja');

    Route::get('/getTaBelanjaHistory',   'TaBelanjaHistoryController@index');
    Route::get('/FiltTaBelanjaHistory',   'TaBelanjaHistoryController@FiltTaBelanjaHistory');
    Route::post('/TmbTaBelanjaHistory',   'TaBelanjaHistoryController@TmbTaBelanjaHistory');
    Route::put('/UbahTaBelanjaHistory',   'TaBelanjaHistoryController@UbahTaBelanjaHistory');
    Route::delete('/HpsTaBelanjaHistory',   'TaBelanjaHistoryController@HpsTaBelanjaHistory');

    Route::get('/getTaPendapatanRinc',   'TaPendapatanRincController@index');
    Route::get('/FiltTaPendapatanRinc',   'TaPendapatanRincController@FiltTaPendapatanRinc');
    Route::post('/TmbTaPendapatanRinc',   'TaPendapatanRincController@TmbTaPendapatanRinc');
    Route::put('/UbahTaPendapatanRinc',   'TaPendapatanRincController@UbahTaPendapatanRinc');
    Route::delete('/HpsTaPendapatanRinc',   'TaPendapatanRincController@HpsTaPendapatanRinc');

    Route::get('/getTaPendapatan',   'TaPendapatanRincController@index');
    Route::get('/FiltTaPendapatan',   'TaPendapatanRincController@FiltTaPendapatanRinc');
    Route::post('/TmbTaPendapatan',   'TaPendapatanRincController@TmbTaPendapatanRinc');
    Route::put('/UbahTaPendapatan',   'TaPendapatanRincController@UbahTaPendapatanRinc');
    Route::delete('/HpsTaPendapatan',   'TaPendapatanRincController@HpsTaPendapatanRinc');

    Route::get('/getTaPembiayaanRinc',   'TaPembiayaanRincController@index');
    Route::get('/FiltTaPembiayaanRinc',   'TaPembiayaanRincController@FiltTaPembiayaanRinc');
    Route::post('/TmbTaPembiayaanRinc',   'TaPembiayaanRincController@TmbTaPembiayaanRinc');
    Route::put('/UbahTaPembiayaanRinc',   'TaPembiayaanRincController@UbahTaPembiayaanRinc');
    Route::delete('/HpsTaPembiayaanRinc',   'TaPembiayaanRincController@HpsTaPembiayaanRinc');

    Route::get('/getTaPembiayaan',   'TaPembiayaanController@index');
    Route::get('/FiltTaPembiayaan',   'TaPembiayaanController@FiltTaPembiayaan');
    Route::post('/TmbTaPembiayaan',   'TaPembiayaanController@TmbTaPembiayaan');
    Route::put('/UbahTaPembiayaan',   'TaPembiayaanController@UbahTaPembiayaan');
    Route::delete('/HpsTaPembiayaan',   'TaPembiayaanController@HpsTaPembiayaan');

    // Route Api Store Regi
    Route::post('/TaTAPD',   'TaTimAnggaranController@apiStore');
    Route::post('/TaSubUnit',   'TaSubUnitController@apiStore');
    Route::delete('/kosongkanDataAll',   'TaSubUnitController@kosongkanDataAll');
    Route::post('/TaMisi',   'TaMisiController@apiStore');
    Route::post('/TaTujuan',   'TaTujuanController@apiStore');
    Route::post('/TaSasaran',   'TaSasaranController@apiStore');
    Route::post('/TaProgram',   'TaProgramController@apiStore');
    Route::post('/TaKegiatan',   'TaKegiatanController@apiStore');
    Route::post('/TaCapaianProgram',   'TaCapaianProgramController@apiStore');
    Route::post('/TaIndikator',   'TaIndikatorController@apiStore');
    Route::post('/TaBelanja',   'TaBelanjaController@apiStore');
    Route::post('/TaBelanjaHistory',   'TaBelanjaHistoryController@apiStore');
    Route::post('/TaBelanjaItem',   'TaBelanjaItemController@apiStore');
    Route::post('/createBelanjaItem',   'TaBelanjaItemController@createBelanjaItem');
    Route::post('/TaBelanjaLanjutan',   'TaBelanjaLanjutanController@apiStore');
    Route::post('/TaBelanjaRinc',   'TaBelanjaRincController@apiStore');
    Route::post('/TaBelanjaRincSub',   'TaBelanjaRincSubController@apiStore');
    Route::post('/TaPendapatan',   'TaPendapatanController@apiStore');
    Route::post('/TaPendapatanRinc',   'TaPendapatanRincController@apiStore');
    Route::post('/TaPembiayaan',   'TaPembiayaanController@apiStore');
    Route::post('/TaPembiayaanRinc',   'TaPembiayaanRincController@apiStore');

    Route::get('/SPRealisasi',   'SPRealisasiController@index');
});
