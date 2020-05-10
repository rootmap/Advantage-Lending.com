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

//Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/home', 'FrontModuleController@index')->name('home');
Route::get('/how-it-works', 'FrontModuleController@howitworks');
Route::get('/types-of-funding', 'FrontModuleController@typesoffunding');
Route::get('/about-advantage-lending', 'FrontModuleController@about');
Route::get('/faq', 'FrontModuleController@faq');
Route::get('/for-attorneys', 'FrontModuleController@forattorneys');
Route::get('/resource', 'FrontModuleController@resources');
Route::get('/contact-us', 'FrontModuleController@contactus');
Route::get('/careers', 'FrontModuleController@careers');
Route::get('/for-brokers', 'FrontModuleController@forbrokers');
Route::get('/complete-application', 'FrontModuleController@completeapplication');
Route::get('/structured-settlement-application-form', 'FrontModuleController@structuredsettlementapplicationform');
Route::get('/inheritance-funding', 'FrontModuleController@inheritancefunding');
Route::get('/need-an-attorney', 'FrontModuleController@needanattorney');
Route::get('/crud', 'CrudController@crud')->name('crud');
Route::post('/crud', 'CrudController@crudgenarate')->name('crudgenarate');

//======================== Usastate Route Start ===============================//
Route::get('/usastate/list','UsastateController@show');
Route::get('/usastate/create','UsastateController@create');
Route::get('/usastate/edit/{id}','UsastateController@edit');
Route::get('/usastate/delete/{id}','UsastateController@destroy');
Route::get('/usastate','UsastateController@index');
Route::get('/usastate/export/excel','UsastateController@ExportExcel');
Route::get('/usastate/export/pdf','UsastateController@ExportPDF');
Route::post('/usastate','UsastateController@store');
Route::post('/usastate/ajax','UsastateController@ajaxSave');
Route::post('/usastate/datatable/ajax','UsastateController@datatable');
Route::post('/usastate/update/{id}','UsastateController@update');
//======================== Usastate Route End ===============================//
//======================== Casetype Route Start ===============================//
Route::get('/casetype/list','CasetypeController@show');
Route::get('/casetype/create','CasetypeController@create');
Route::get('/casetype/edit/{id}','CasetypeController@edit');
Route::get('/casetype/delete/{id}','CasetypeController@destroy');
Route::get('/casetype','CasetypeController@index');
Route::get('/casetype/export/excel','CasetypeController@ExportExcel');
Route::get('/casetype/export/pdf','CasetypeController@ExportPDF');
Route::post('/casetype','CasetypeController@store');
Route::post('/casetype/ajax','CasetypeController@ajaxSave');
Route::post('/casetype/datatable/ajax','CasetypeController@datatable');
Route::post('/casetype/update/{id}','CasetypeController@update');
//======================== Casetype Route End ===============================//
//======================== Casetype Route Start ===============================//
Route::get('/casetype/list','CasetypeController@show');
Route::get('/casetype/create','CasetypeController@create');
Route::get('/casetype/edit/{id}','CasetypeController@edit');
Route::get('/casetype/delete/{id}','CasetypeController@destroy');
Route::get('/casetype','CasetypeController@index');
Route::get('/casetype/export/excel','CasetypeController@ExportExcel');
Route::get('/casetype/export/pdf','CasetypeController@ExportPDF');
Route::post('/casetype','CasetypeController@store');
Route::post('/casetype/ajax','CasetypeController@ajaxSave');
Route::post('/casetype/datatable/ajax','CasetypeController@datatable');
Route::post('/casetype/update/{id}','CasetypeController@update');
//======================== Casetype Route End ===============================//
//======================== Hearabout Route Start ===============================//
Route::get('/hearabout/list','HearaboutController@show');
Route::get('/hearabout/create','HearaboutController@create');
Route::get('/hearabout/edit/{id}','HearaboutController@edit');
Route::get('/hearabout/delete/{id}','HearaboutController@destroy');
Route::get('/hearabout','HearaboutController@index');
Route::get('/hearabout/export/excel','HearaboutController@ExportExcel');
Route::get('/hearabout/export/pdf','HearaboutController@ExportPDF');
Route::post('/hearabout','HearaboutController@store');
Route::post('/hearabout/ajax','HearaboutController@ajaxSave');
Route::post('/hearabout/datatable/ajax','HearaboutController@datatable');
Route::post('/hearabout/update/{id}','HearaboutController@update');
//======================== Hearabout Route End ===============================//
//======================== Applicationform Route Start ===============================//
Route::get('/applicationform/list','ApplicationformController@show');
Route::get('/applicationform/create','ApplicationformController@create');
Route::get('/applicationform/edit/{id}','ApplicationformController@edit');
Route::get('/applicationform/delete/{id}','ApplicationformController@destroy');
Route::get('/applicationform','ApplicationformController@index');
Route::get('/applicationform/export/excel','ApplicationformController@ExportExcel');
Route::get('/applicationform/export/pdf','ApplicationformController@ExportPDF');
Route::post('/applicationform','ApplicationformController@store');
Route::post('/applicationform/ajax','ApplicationformController@ajaxSave');
Route::post('/applicationform/datatable/ajax','ApplicationformController@datatable');
Route::post('/applicationform/update/{id}','ApplicationformController@update');
//======================== Applicationform Route End ===============================//
//======================== Structuredsettlementapplicationform Route Start ===============================//
Route::get('/structuredsettlementapplicationform/list','StructuredsettlementapplicationformController@show');
Route::get('/structuredsettlementapplicationform/create','StructuredsettlementapplicationformController@create');
Route::get('/structuredsettlementapplicationform/edit/{id}','StructuredsettlementapplicationformController@edit');
Route::get('/structuredsettlementapplicationform/delete/{id}','StructuredsettlementapplicationformController@destroy');
Route::get('/structuredsettlementapplicationform','StructuredsettlementapplicationformController@index');
Route::get('/structuredsettlementapplicationform/export/excel','StructuredsettlementapplicationformController@ExportExcel');
Route::get('/structuredsettlementapplicationform/export/pdf','StructuredsettlementapplicationformController@ExportPDF');
Route::post('/structuredsettlementapplicationform','StructuredsettlementapplicationformController@store');
Route::post('/structuredsettlementapplicationform/ajax','StructuredsettlementapplicationformController@ajaxSave');
Route::post('/structuredsettlementapplicationform/datatable/ajax','StructuredsettlementapplicationformController@datatable');
Route::post('/structuredsettlementapplicationform/update/{id}','StructuredsettlementapplicationformController@update');
//======================== Structuredsettlementapplicationform Route End ===============================//