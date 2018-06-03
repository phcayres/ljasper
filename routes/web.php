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

Route::resource('pessoas', 'PessoaController');


//relatório geral
Route::get('/report/{jrxmlName}/{outputFile}', 'ReportController@getReport')->name('report');

// listagem com parâmtros para filtro no SQL utlizando LIKE
Route::get('/report01/{parameter}', 'ReportController@getReportParameter')->name('report01');

//relatório utilizando  arquivo json
Route::get('/jsontopdf', 'ReportController@jsonToPdf')->name('jsontopdf');
