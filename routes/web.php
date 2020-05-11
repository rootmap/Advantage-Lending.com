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

Route::get('/', 'FrontModuleController@index');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
 Route::get('/home', 'FrontModuleController@index')->name('home');
Route::get('/how-it-works', 'FrontModuleController@howitworks');
Route::get('/types-of-funding', 'FrontModuleController@typesoffunding');
Route::get('/about-advantage-lending', 'FrontModuleController@about');
Route::get('/faq', 'FrontModuleController@faq');
Route::get('/for-attorneys', 'FrontModuleController@forattorneys');
Route::get('/resource', 'FrontModuleController@resources');
Route::get('/resource-details', 'FrontModuleController@resourcesDetails');
Route::get('/contact-us', 'FrontModuleController@contactus');
Route::get('/careers', 'FrontModuleController@careers');
Route::get('/for-brokers', 'FrontModuleController@forbrokers');
Route::get('/complete-application', 'FrontModuleController@completeapplication');
Route::get('/structured-settlement-application-form', 'FrontModuleController@structuredsettlementapplicationform');
Route::get('/inheritance-funding', 'FrontModuleController@inheritancefunding');
Route::get('/need-an-attorney', 'FrontModuleController@needanattorney');
Route::get('/terms-of-use', 'FrontModuleController@termsOfUse');
Route::get('/privacy-policy', 'FrontModuleController@privacyPolicy');
Route::get('/state-specific-licenses', 'FrontModuleController@stateSpecificLicenses');
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
//======================== Inheritancefundingform Route Start ===============================//
Route::get('/inheritancefundingform/list','InheritancefundingformController@show');
Route::get('/inheritancefundingform/create','InheritancefundingformController@create');
Route::get('/inheritancefundingform/edit/{id}','InheritancefundingformController@edit');
Route::get('/inheritancefundingform/delete/{id}','InheritancefundingformController@destroy');
Route::get('/inheritancefundingform','InheritancefundingformController@index');
Route::get('/inheritancefundingform/export/excel','InheritancefundingformController@ExportExcel');
Route::get('/inheritancefundingform/export/pdf','InheritancefundingformController@ExportPDF');
Route::post('/inheritancefundingform','InheritancefundingformController@store');
Route::post('/inheritancefundingform/ajax','InheritancefundingformController@ajaxSave');
Route::post('/inheritancefundingform/datatable/ajax','InheritancefundingformController@datatable');
Route::post('/inheritancefundingform/update/{id}','InheritancefundingformController@update');
//======================== Inheritancefundingform Route End ===============================//
//======================== Needanattorney Route Start ===============================//
Route::get('/needanattorney/list','NeedanattorneyController@show');
Route::get('/needanattorney/create','NeedanattorneyController@create');
Route::get('/needanattorney/edit/{id}','NeedanattorneyController@edit');
Route::get('/needanattorney/delete/{id}','NeedanattorneyController@destroy');
Route::get('/needanattorney','NeedanattorneyController@index');
Route::get('/needanattorney/export/excel','NeedanattorneyController@ExportExcel');
Route::get('/needanattorney/export/pdf','NeedanattorneyController@ExportPDF');
Route::post('/needanattorney','NeedanattorneyController@store');
Route::post('/needanattorney/ajax','NeedanattorneyController@ajaxSave');
Route::post('/needanattorney/datatable/ajax','NeedanattorneyController@datatable');
Route::post('/needanattorney/update/{id}','NeedanattorneyController@update');
//======================== Needanattorney Route End ===============================//
//======================== Contactmeabout Route Start ===============================//
Route::get('/contactmeabout/list','ContactmeaboutController@show');
Route::get('/contactmeabout/create','ContactmeaboutController@create');
Route::get('/contactmeabout/edit/{id}','ContactmeaboutController@edit');
Route::get('/contactmeabout/delete/{id}','ContactmeaboutController@destroy');
Route::get('/contactmeabout','ContactmeaboutController@index');
Route::get('/contactmeabout/export/excel','ContactmeaboutController@ExportExcel');
Route::get('/contactmeabout/export/pdf','ContactmeaboutController@ExportPDF');
Route::post('/contactmeabout','ContactmeaboutController@store');
Route::post('/contactmeabout/ajax','ContactmeaboutController@ajaxSave');
Route::post('/contactmeabout/datatable/ajax','ContactmeaboutController@datatable');
Route::post('/contactmeabout/update/{id}','ContactmeaboutController@update');
//======================== Contactmeabout Route End ===============================//

//======================== Contactrequest Route Start ===============================//
Route::get('/contactrequest/list','ContactrequestController@show');
Route::get('/contactrequest/create','ContactrequestController@create');
Route::get('/contactrequest/edit/{id}','ContactrequestController@edit');
Route::get('/contactrequest/delete/{id}','ContactrequestController@destroy');
Route::get('/contactrequest','ContactrequestController@index');
Route::get('/contactrequest/export/excel','ContactrequestController@ExportExcel');
Route::get('/contactrequest/export/pdf','ContactrequestController@ExportPDF');
Route::post('/contactrequest','ContactrequestController@store');
Route::post('/contactrequest/ajax','ContactrequestController@ajaxSave');
Route::post('/contactrequest/datatable/ajax','ContactrequestController@datatable');
Route::post('/contactrequest/update/{id}','ContactrequestController@update');
//======================== Contactrequest Route End ===============================//
//======================== Faqcategory Route Start ===============================//
Route::get('/faqcategory/list','FaqcategoryController@show');
Route::get('/faqcategory/create','FaqcategoryController@create');
Route::get('/faqcategory/edit/{id}','FaqcategoryController@edit');
Route::get('/faqcategory/delete/{id}','FaqcategoryController@destroy');
Route::get('/faqcategory','FaqcategoryController@index');
Route::get('/faqcategory/export/excel','FaqcategoryController@ExportExcel');
Route::get('/faqcategory/export/pdf','FaqcategoryController@ExportPDF');
Route::post('/faqcategory','FaqcategoryController@store');
Route::post('/faqcategory/ajax','FaqcategoryController@ajaxSave');
Route::post('/faqcategory/datatable/ajax','FaqcategoryController@datatable');
Route::post('/faqcategory/update/{id}','FaqcategoryController@update');
//======================== Faqcategory Route End ===============================//
//======================== Resourcecontentinfo Route Start ===============================//
Route::get('/resourcecontentinfo/list','ResourcecontentinfoController@show');
Route::get('/resourcecontentinfo/create','ResourcecontentinfoController@create');
Route::get('/resourcecontentinfo/edit/{id}','ResourcecontentinfoController@edit');
Route::get('/resourcecontentinfo/delete/{id}','ResourcecontentinfoController@destroy');
Route::get('/resourcecontentinfo','ResourcecontentinfoController@index');
Route::get('/resourcecontentinfo/export/excel','ResourcecontentinfoController@ExportExcel');
Route::get('/resourcecontentinfo/export/pdf','ResourcecontentinfoController@ExportPDF');
Route::post('/resourcecontentinfo','ResourcecontentinfoController@store');
Route::post('/resourcecontentinfo/ajax','ResourcecontentinfoController@ajaxSave');
Route::post('/resourcecontentinfo/datatable/ajax','ResourcecontentinfoController@datatable');
Route::post('/resourcecontentinfo/update/{id}','ResourcecontentinfoController@update');
//======================== Resourcecontentinfo Route End ===============================//
//======================== Resourcecontent Route Start ===============================//
Route::get('/resourcecontent/list','ResourcecontentController@show');
Route::get('/resourcecontent/create','ResourcecontentController@create');
Route::get('/resourcecontent/edit/{id}','ResourcecontentController@edit');
Route::get('/resourcecontent/delete/{id}','ResourcecontentController@destroy');
Route::get('/resourcecontent','ResourcecontentController@index');
Route::get('/resourcecontent/export/excel','ResourcecontentController@ExportExcel');
Route::get('/resourcecontent/export/pdf','ResourcecontentController@ExportPDF');
Route::post('/resourcecontent','ResourcecontentController@store');
Route::post('/resourcecontent/ajax','ResourcecontentController@ajaxSave');
Route::post('/resourcecontent/datatable/ajax','ResourcecontentController@datatable');
Route::post('/resourcecontent/update/{id}','ResourcecontentController@update');
//======================== Resourcecontent Route End ===============================//
//======================== Faqcontent Route Start ===============================//
Route::get('/faqcontent/list','FaqcontentController@show');
Route::get('/faqcontent/create','FaqcontentController@create');
Route::get('/faqcontent/edit/{id}','FaqcontentController@edit');
Route::get('/faqcontent/delete/{id}','FaqcontentController@destroy');
Route::get('/faqcontent','FaqcontentController@index');
Route::get('/faqcontent/export/excel','FaqcontentController@ExportExcel');
Route::get('/faqcontent/export/pdf','FaqcontentController@ExportPDF');
Route::post('/faqcontent','FaqcontentController@store');
Route::post('/faqcontent/ajax','FaqcontentController@ajaxSave');
Route::post('/faqcontent/datatable/ajax','FaqcontentController@datatable');
Route::post('/faqcontent/update/{id}','FaqcontentController@update');
//======================== Faqcontent Route End ===============================//

//======================== Sitesetting Route Start ===============================//
Route::get('/sitesetting/list','SitesettingController@show');
Route::get('/sitesetting/create','SitesettingController@create');
Route::get('/sitesetting/edit/{id}','SitesettingController@edit');
Route::get('/sitesetting/delete/{id}','SitesettingController@destroy');
Route::get('/sitesetting','SitesettingController@index');
Route::get('/sitesetting/export/excel','SitesettingController@ExportExcel');
Route::get('/sitesetting/export/pdf','SitesettingController@ExportPDF');
Route::post('/sitesetting','SitesettingController@store');
Route::post('/sitesetting/ajax','SitesettingController@ajaxSave');
Route::post('/sitesetting/datatable/ajax','SitesettingController@datatable');
Route::post('/sitesetting/update/{id}','SitesettingController@update');
//======================== Sitesetting Route End ===============================//
//======================== Slider Route Start ===============================//
Route::get('/slider/list','SliderController@show');
Route::get('/slider/create','SliderController@create');
Route::get('/slider/edit/{id}','SliderController@edit');
Route::get('/slider/delete/{id}','SliderController@destroy');
Route::get('/slider','SliderController@index');
Route::get('/slider/export/excel','SliderController@ExportExcel');
Route::get('/slider/export/pdf','SliderController@ExportPDF');
Route::post('/slider','SliderController@store');
Route::post('/slider/ajax','SliderController@ajaxSave');
Route::post('/slider/datatable/ajax','SliderController@datatable');
Route::post('/slider/update/{id}','SliderController@update');
//======================== Slider Route End ===============================//