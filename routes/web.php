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
 
Route::get('/how-it-works', 'FrontModuleController@howitworks');
Route::get('/types-of-funding', 'FrontModuleController@typesoffunding');
Route::get('/about-advantage-lending', 'FrontModuleController@about');
Route::get('/faq', 'FrontModuleController@faq');
Route::get('/for-attorneys', 'FrontModuleController@forattorneys');
Route::get('/resource', 'FrontModuleController@resources');
Route::get('/resource-details/{id}/{title}', 'FrontModuleController@resourcesDetails');
Route::post('/search', 'FrontModuleController@resourcesSearch');
Route::get('/contact-us', 'FrontModuleController@contactus');
Route::post('/contact-us', 'FrontModuleController@contactusSave');
Route::get('/careers', 'FrontModuleController@careers');
Route::get('/for-brokers', 'FrontModuleController@forbrokers');
Route::get('/complete-application', 'FrontModuleController@completeapplication');
Route::get('/structured-settlement-application-form', 'FrontModuleController@structuredsettlementapplicationform');
Route::get('/inheritance-funding', 'FrontModuleController@inheritancefunding');
Route::get('/need-an-attorney', 'FrontModuleController@needanattorney');
Route::get('/terms-of-use', 'FrontModuleController@termsOfUse');
Route::get('/privacy-policy', 'FrontModuleController@privacyPolicy');
Route::get('/state-specific-licenses', 'FrontModuleController@stateSpecificLicenses');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'FrontModuleController@dashboard')->name('home');
    Route::get('/dashboard', 'FrontModuleController@dashboard')->name('dashboard');
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
    //======================== Howwehelp Route Start ===============================//
    Route::get('/howwehelp/list','HowwehelpController@show');
    Route::get('/howwehelp/create','HowwehelpController@create');
    Route::get('/howwehelp/edit/{id}','HowwehelpController@edit');
    Route::get('/howwehelp/delete/{id}','HowwehelpController@destroy');
    Route::get('/howwehelp','HowwehelpController@index');
    Route::get('/howwehelp/export/excel','HowwehelpController@ExportExcel');
    Route::get('/howwehelp/export/pdf','HowwehelpController@ExportPDF');
    Route::post('/howwehelp','HowwehelpController@store');
    Route::post('/howwehelp/ajax','HowwehelpController@ajaxSave');
    Route::post('/howwehelp/datatable/ajax','HowwehelpController@datatable');
    Route::post('/howwehelp/update/{id}','HowwehelpController@update');
    //======================== Howwehelp Route End ===============================//
    //======================== Betterdaysstart Route Start ===============================//
    Route::get('/betterdaysstart/list','BetterdaysstartController@show');
    Route::get('/betterdaysstart/create','BetterdaysstartController@create');
    Route::get('/betterdaysstart/edit/{id}','BetterdaysstartController@edit');
    Route::get('/betterdaysstart/delete/{id}','BetterdaysstartController@destroy');
    Route::get('/betterdaysstart','BetterdaysstartController@index');
    Route::get('/betterdaysstart/export/excel','BetterdaysstartController@ExportExcel');
    Route::get('/betterdaysstart/export/pdf','BetterdaysstartController@ExportPDF');
    Route::post('/betterdaysstart','BetterdaysstartController@store');
    Route::post('/betterdaysstart/ajax','BetterdaysstartController@ajaxSave');
    Route::post('/betterdaysstart/datatable/ajax','BetterdaysstartController@datatable');
    Route::post('/betterdaysstart/update/{id}','BetterdaysstartController@update');
    //======================== Betterdaysstart Route End ===============================//
    //======================== Fundingneedpagecontent Route Start ===============================//
    Route::get('/fundingneedpagecontent/list','FundingneedpagecontentController@show');
    Route::get('/fundingneedpagecontent/create','FundingneedpagecontentController@create');
    Route::get('/fundingneedpagecontent/edit/{id}','FundingneedpagecontentController@edit');
    Route::get('/fundingneedpagecontent/delete/{id}','FundingneedpagecontentController@destroy');
    Route::get('/fundingneedpagecontent','FundingneedpagecontentController@index');
    Route::get('/fundingneedpagecontent/export/excel','FundingneedpagecontentController@ExportExcel');
    Route::get('/fundingneedpagecontent/export/pdf','FundingneedpagecontentController@ExportPDF');
    Route::post('/fundingneedpagecontent','FundingneedpagecontentController@store');
    Route::post('/fundingneedpagecontent/ajax','FundingneedpagecontentController@ajaxSave');
    Route::post('/fundingneedpagecontent/datatable/ajax','FundingneedpagecontentController@datatable');
    Route::post('/fundingneedpagecontent/update/{id}','FundingneedpagecontentController@update');
    //======================== Fundingneedpagecontent Route End ===============================//
    //======================== Fundingyouneed Route Start ===============================//
    Route::get('/fundingyouneed/list','FundingyouneedController@show');
    Route::get('/fundingyouneed/create','FundingyouneedController@create');
    Route::get('/fundingyouneed/edit/{id}','FundingyouneedController@edit');
    Route::get('/fundingyouneed/delete/{id}','FundingyouneedController@destroy');
    Route::get('/fundingyouneed','FundingyouneedController@index');
    Route::get('/fundingyouneed/export/excel','FundingyouneedController@ExportExcel');
    Route::get('/fundingyouneed/export/pdf','FundingyouneedController@ExportPDF');
    Route::post('/fundingyouneed','FundingyouneedController@store');
    Route::post('/fundingyouneed/ajax','FundingyouneedController@ajaxSave');
    Route::post('/fundingyouneed/datatable/ajax','FundingyouneedController@datatable');
    Route::post('/fundingyouneed/update/{id}','FundingyouneedController@update');
    //======================== Fundingyouneed Route End ===============================//
    //======================== Youarenotalone Route Start ===============================//
    Route::get('/youarenotalone/list','YouarenotaloneController@show');
    Route::get('/youarenotalone/create','YouarenotaloneController@create');
    Route::get('/youarenotalone/edit/{id}','YouarenotaloneController@edit');
    Route::get('/youarenotalone/delete/{id}','YouarenotaloneController@destroy');
    Route::get('/youarenotalone','YouarenotaloneController@index');
    Route::get('/youarenotalone/export/excel','YouarenotaloneController@ExportExcel');
    Route::get('/youarenotalone/export/pdf','YouarenotaloneController@ExportPDF');
    Route::post('/youarenotalone','YouarenotaloneController@store');
    Route::post('/youarenotalone/ajax','YouarenotaloneController@ajaxSave');
    Route::post('/youarenotalone/datatable/ajax','YouarenotaloneController@datatable');
    Route::post('/youarenotalone/update/{id}','YouarenotaloneController@update');
    //======================== Youarenotalone Route End ===============================//
    //======================== Youarenotalonevideo Route Start ===============================//
    Route::get('/youarenotalonevideo/list','YouarenotalonevideoController@show');
    Route::get('/youarenotalonevideo/create','YouarenotalonevideoController@create');
    Route::get('/youarenotalonevideo/edit/{id}','YouarenotalonevideoController@edit');
    Route::get('/youarenotalonevideo/delete/{id}','YouarenotalonevideoController@destroy');
    Route::get('/youarenotalonevideo','YouarenotalonevideoController@index');
    Route::get('/youarenotalonevideo/export/excel','YouarenotalonevideoController@ExportExcel');
    Route::get('/youarenotalonevideo/export/pdf','YouarenotalonevideoController@ExportPDF');
    Route::post('/youarenotalonevideo','YouarenotalonevideoController@store');
    Route::post('/youarenotalonevideo/ajax','YouarenotalonevideoController@ajaxSave');
    Route::post('/youarenotalonevideo/datatable/ajax','YouarenotalonevideoController@datatable');
    Route::post('/youarenotalonevideo/update/{id}','YouarenotalonevideoController@update');
    //======================== Youarenotalonevideo Route End ===============================//

    //======================== Helponmanycase Route Start ===============================//
    Route::get('/helponmanycase/list','HelponmanycaseController@show');
    Route::get('/helponmanycase/create','HelponmanycaseController@create');
    Route::get('/helponmanycase/edit/{id}','HelponmanycaseController@edit');
    Route::get('/helponmanycase/delete/{id}','HelponmanycaseController@destroy');
    Route::get('/helponmanycase','HelponmanycaseController@index');
    Route::get('/helponmanycase/export/excel','HelponmanycaseController@ExportExcel');
    Route::get('/helponmanycase/export/pdf','HelponmanycaseController@ExportPDF');
    Route::post('/helponmanycase','HelponmanycaseController@store');
    Route::post('/helponmanycase/ajax','HelponmanycaseController@ajaxSave');
    Route::post('/helponmanycase/datatable/ajax','HelponmanycaseController@datatable');
    Route::post('/helponmanycase/update/{id}','HelponmanycaseController@update');
    //======================== Helponmanycase Route End ===============================//
    //======================== Helponmanycasetypes Route Start ===============================//
    Route::get('/helponmanycasetypes/list','HelponmanycasetypesController@show');
    Route::get('/helponmanycasetypes/create','HelponmanycasetypesController@create');
    Route::get('/helponmanycasetypes/edit/{id}','HelponmanycasetypesController@edit');
    Route::get('/helponmanycasetypes/delete/{id}','HelponmanycasetypesController@destroy');
    Route::get('/helponmanycasetypes','HelponmanycasetypesController@index');
    Route::get('/helponmanycasetypes/export/excel','HelponmanycasetypesController@ExportExcel');
    Route::get('/helponmanycasetypes/export/pdf','HelponmanycasetypesController@ExportPDF');
    Route::post('/helponmanycasetypes','HelponmanycasetypesController@store');
    Route::post('/helponmanycasetypes/ajax','HelponmanycasetypesController@ajaxSave');
    Route::post('/helponmanycasetypes/datatable/ajax','HelponmanycasetypesController@datatable');
    Route::post('/helponmanycasetypes/update/{id}','HelponmanycasetypesController@update');
    //======================== Helponmanycasetypes Route End ===============================//
    //======================== Neversettleforless Route Start ===============================//
    Route::get('/neversettleforless/list','NeversettleforlessController@show');
    Route::get('/neversettleforless/create','NeversettleforlessController@create');
    Route::get('/neversettleforless/edit/{id}','NeversettleforlessController@edit');
    Route::get('/neversettleforless/delete/{id}','NeversettleforlessController@destroy');
    Route::get('/neversettleforless','NeversettleforlessController@index');
    Route::get('/neversettleforless/export/excel','NeversettleforlessController@ExportExcel');
    Route::get('/neversettleforless/export/pdf','NeversettleforlessController@ExportPDF');
    Route::post('/neversettleforless','NeversettleforlessController@store');
    Route::post('/neversettleforless/ajax','NeversettleforlessController@ajaxSave');
    Route::post('/neversettleforless/datatable/ajax','NeversettleforlessController@datatable');
    Route::post('/neversettleforless/update/{id}','NeversettleforlessController@update');
    //======================== Neversettleforless Route End ===============================//
    //======================== Glossarysectioncontent Route Start ===============================//
    Route::get('/glossarysectioncontent/list','GlossarysectioncontentController@show');
    Route::get('/glossarysectioncontent/create','GlossarysectioncontentController@create');
    Route::get('/glossarysectioncontent/edit/{id}','GlossarysectioncontentController@edit');
    Route::get('/glossarysectioncontent/delete/{id}','GlossarysectioncontentController@destroy');
    Route::get('/glossarysectioncontent','GlossarysectioncontentController@index');
    Route::get('/glossarysectioncontent/export/excel','GlossarysectioncontentController@ExportExcel');
    Route::get('/glossarysectioncontent/export/pdf','GlossarysectioncontentController@ExportPDF');
    Route::post('/glossarysectioncontent','GlossarysectioncontentController@store');
    Route::post('/glossarysectioncontent/ajax','GlossarysectioncontentController@ajaxSave');
    Route::post('/glossarysectioncontent/datatable/ajax','GlossarysectioncontentController@datatable');
    Route::post('/glossarysectioncontent/update/{id}','GlossarysectioncontentController@update');
    //======================== Glossarysectioncontent Route End ===============================//
    //======================== Glossary Route Start ===============================//
    Route::get('/glossary/list','GlossaryController@show');
    Route::get('/glossary/create','GlossaryController@create');
    Route::get('/glossary/edit/{id}','GlossaryController@edit');
    Route::get('/glossary/delete/{id}','GlossaryController@destroy');
    Route::get('/glossary','GlossaryController@index');
    Route::get('/glossary/export/excel','GlossaryController@ExportExcel');
    Route::get('/glossary/export/pdf','GlossaryController@ExportPDF');
    Route::post('/glossary','GlossaryController@store');
    Route::post('/glossary/ajax','GlossaryController@ajaxSave');
    Route::post('/glossary/datatable/ajax','GlossaryController@datatable');
    Route::post('/glossary/update/{id}','GlossaryController@update');
    //======================== Glossary Route End ===============================//

    //======================== Privacypolicypage Route Start ===============================//
    Route::get('/privacypolicypage/list','PrivacypolicypageController@show');
    Route::get('/privacypolicypage/create','PrivacypolicypageController@create');
    Route::get('/privacypolicypage/edit/{id}','PrivacypolicypageController@edit');
    Route::get('/privacypolicypage/delete/{id}','PrivacypolicypageController@destroy');
    Route::get('/privacypolicypage','PrivacypolicypageController@index');
    Route::get('/privacypolicypage/export/excel','PrivacypolicypageController@ExportExcel');
    Route::get('/privacypolicypage/export/pdf','PrivacypolicypageController@ExportPDF');
    Route::post('/privacypolicypage','PrivacypolicypageController@store');
    Route::post('/privacypolicypage/ajax','PrivacypolicypageController@ajaxSave');
    Route::post('/privacypolicypage/datatable/ajax','PrivacypolicypageController@datatable');
    Route::post('/privacypolicypage/update/{id}','PrivacypolicypageController@update');
    //======================== Privacypolicypage Route End ===============================//
    //======================== Termsofuse Route Start ===============================//
    Route::get('/termsofuse/list','TermsofuseController@show');
    Route::get('/termsofuse/create','TermsofuseController@create');
    Route::get('/termsofuse/edit/{id}','TermsofuseController@edit');
    Route::get('/termsofuse/delete/{id}','TermsofuseController@destroy');
    Route::get('/termsofuse','TermsofuseController@index');
    Route::get('/termsofuse/export/excel','TermsofuseController@ExportExcel');
    Route::get('/termsofuse/export/pdf','TermsofuseController@ExportPDF');
    Route::post('/termsofuse','TermsofuseController@store');
    Route::post('/termsofuse/ajax','TermsofuseController@ajaxSave');
    Route::post('/termsofuse/datatable/ajax','TermsofuseController@datatable');
    Route::post('/termsofuse/update/{id}','TermsofuseController@update');
    //======================== Termsofuse Route End ===============================//
    //======================== Statespecificlicenses Route Start ===============================//
    Route::get('/statespecificlicenses/list','StatespecificlicensesController@show');
    Route::get('/statespecificlicenses/create','StatespecificlicensesController@create');
    Route::get('/statespecificlicenses/edit/{id}','StatespecificlicensesController@edit');
    Route::get('/statespecificlicenses/delete/{id}','StatespecificlicensesController@destroy');
    Route::get('/statespecificlicenses','StatespecificlicensesController@index');
    Route::get('/statespecificlicenses/export/excel','StatespecificlicensesController@ExportExcel');
    Route::get('/statespecificlicenses/export/pdf','StatespecificlicensesController@ExportPDF');
    Route::post('/statespecificlicenses','StatespecificlicensesController@store');
    Route::post('/statespecificlicenses/ajax','StatespecificlicensesController@ajaxSave');
    Route::post('/statespecificlicenses/datatable/ajax','StatespecificlicensesController@datatable');
    Route::post('/statespecificlicenses/update/{id}','StatespecificlicensesController@update');
    //======================== Statespecificlicenses Route End ===============================//
    //======================== Howitworkspagesetting Route Start ===============================//
    Route::get('/howitworkspagesetting/list','HowitworkspagesettingController@show');
    Route::get('/howitworkspagesetting/create','HowitworkspagesettingController@create');
    Route::get('/howitworkspagesetting/edit/{id}','HowitworkspagesettingController@edit');
    Route::get('/howitworkspagesetting/delete/{id}','HowitworkspagesettingController@destroy');
    Route::get('/howitworkspagesetting','HowitworkspagesettingController@index');
    Route::get('/howitworkspagesetting/export/excel','HowitworkspagesettingController@ExportExcel');
    Route::get('/howitworkspagesetting/export/pdf','HowitworkspagesettingController@ExportPDF');
    Route::post('/howitworkspagesetting','HowitworkspagesettingController@store');
    Route::post('/howitworkspagesetting/ajax','HowitworkspagesettingController@ajaxSave');
    Route::post('/howitworkspagesetting/datatable/ajax','HowitworkspagesettingController@datatable');
    Route::post('/howitworkspagesetting/update/{id}','HowitworkspagesettingController@update');
    //======================== Howitworkspagesetting Route End ===============================//
    //======================== Faqpagesetting Route Start ===============================//
    Route::get('/faqpagesetting/list','FaqpagesettingController@show');
    Route::get('/faqpagesetting/create','FaqpagesettingController@create');
    Route::get('/faqpagesetting/edit/{id}','FaqpagesettingController@edit');
    Route::get('/faqpagesetting/delete/{id}','FaqpagesettingController@destroy');
    Route::get('/faqpagesetting','FaqpagesettingController@index');
    Route::get('/faqpagesetting/export/excel','FaqpagesettingController@ExportExcel');
    Route::get('/faqpagesetting/export/pdf','FaqpagesettingController@ExportPDF');
    Route::post('/faqpagesetting','FaqpagesettingController@store');
    Route::post('/faqpagesetting/ajax','FaqpagesettingController@ajaxSave');
    Route::post('/faqpagesetting/datatable/ajax','FaqpagesettingController@datatable');
    Route::post('/faqpagesetting/update/{id}','FaqpagesettingController@update');
    //======================== Faqpagesetting Route End ===============================//
    //======================== Typesoffundingpagesetting Route Start ===============================//
    Route::get('/typesoffundingpagesetting/list','TypesoffundingpagesettingController@show');
    Route::get('/typesoffundingpagesetting/create','TypesoffundingpagesettingController@create');
    Route::get('/typesoffundingpagesetting/edit/{id}','TypesoffundingpagesettingController@edit');
    Route::get('/typesoffundingpagesetting/delete/{id}','TypesoffundingpagesettingController@destroy');
    Route::get('/typesoffundingpagesetting','TypesoffundingpagesettingController@index');
    Route::get('/typesoffundingpagesetting/export/excel','TypesoffundingpagesettingController@ExportExcel');
    Route::get('/typesoffundingpagesetting/export/pdf','TypesoffundingpagesettingController@ExportPDF');
    Route::post('/typesoffundingpagesetting','TypesoffundingpagesettingController@store');
    Route::post('/typesoffundingpagesetting/ajax','TypesoffundingpagesettingController@ajaxSave');
    Route::post('/typesoffundingpagesetting/datatable/ajax','TypesoffundingpagesettingController@datatable');
    Route::post('/typesoffundingpagesetting/update/{id}','TypesoffundingpagesettingController@update');
    //======================== Typesoffundingpagesetting Route End ===============================//
    //======================== Resourcepagesetting Route Start ===============================//
    Route::get('/resourcepagesetting/list','ResourcepagesettingController@show');
    Route::get('/resourcepagesetting/create','ResourcepagesettingController@create');
    Route::get('/resourcepagesetting/edit/{id}','ResourcepagesettingController@edit');
    Route::get('/resourcepagesetting/delete/{id}','ResourcepagesettingController@destroy');
    Route::get('/resourcepagesetting','ResourcepagesettingController@index');
    Route::get('/resourcepagesetting/export/excel','ResourcepagesettingController@ExportExcel');
    Route::get('/resourcepagesetting/export/pdf','ResourcepagesettingController@ExportPDF');
    Route::post('/resourcepagesetting','ResourcepagesettingController@store');
    Route::post('/resourcepagesetting/ajax','ResourcepagesettingController@ajaxSave');
    Route::post('/resourcepagesetting/datatable/ajax','ResourcepagesettingController@datatable');
    Route::post('/resourcepagesetting/update/{id}','ResourcepagesettingController@update');
    //======================== Resourcepagesetting Route End ===============================//

    //======================== Typeoffundpage Route Start ===============================//
    Route::get('/typeoffundpage/list','TypeoffundpageController@show');
    Route::get('/typeoffundpage/create','TypeoffundpageController@create');
    Route::get('/typeoffundpage/edit/{id}','TypeoffundpageController@edit');
    Route::get('/typeoffundpage/delete/{id}','TypeoffundpageController@destroy');
    Route::get('/typeoffundpage','TypeoffundpageController@index');
    Route::get('/typeoffundpage/export/excel','TypeoffundpageController@ExportExcel');
    Route::get('/typeoffundpage/export/pdf','TypeoffundpageController@ExportPDF');
    Route::post('/typeoffundpage','TypeoffundpageController@store');
    Route::post('/typeoffundpage/ajax','TypeoffundpageController@ajaxSave');
    Route::post('/typeoffundpage/datatable/ajax','TypeoffundpageController@datatable');
    Route::post('/typeoffundpage/update/{id}','TypeoffundpageController@update');
    //======================== Typeoffundpage Route End ===============================//
    //======================== Howitworksdonotsettleforless Route Start ===============================//
    Route::get('/howitworksdonotsettleforless/list','HowitworksdonotsettleforlessController@show');
    Route::get('/howitworksdonotsettleforless/create','HowitworksdonotsettleforlessController@create');
    Route::get('/howitworksdonotsettleforless/edit/{id}','HowitworksdonotsettleforlessController@edit');
    Route::get('/howitworksdonotsettleforless/delete/{id}','HowitworksdonotsettleforlessController@destroy');
    Route::get('/howitworksdonotsettleforless','HowitworksdonotsettleforlessController@index');
    Route::get('/howitworksdonotsettleforless/export/excel','HowitworksdonotsettleforlessController@ExportExcel');
    Route::get('/howitworksdonotsettleforless/export/pdf','HowitworksdonotsettleforlessController@ExportPDF');
    Route::post('/howitworksdonotsettleforless','HowitworksdonotsettleforlessController@store');
    Route::post('/howitworksdonotsettleforless/ajax','HowitworksdonotsettleforlessController@ajaxSave');
    Route::post('/howitworksdonotsettleforless/datatable/ajax','HowitworksdonotsettleforlessController@datatable');
    Route::post('/howitworksdonotsettleforless/update/{id}','HowitworksdonotsettleforlessController@update');
    //======================== Howitworksdonotsettleforless Route End ===============================//

    //======================== Howitworksdonotsettlestep Route Start ===============================//
    Route::get('/howitworksdonotsettlestep/list','HowitworksdonotsettlestepController@show');
    Route::get('/howitworksdonotsettlestep/create','HowitworksdonotsettlestepController@create');
    Route::get('/howitworksdonotsettlestep/edit/{id}','HowitworksdonotsettlestepController@edit');
    Route::get('/howitworksdonotsettlestep/delete/{id}','HowitworksdonotsettlestepController@destroy');
    Route::get('/howitworksdonotsettlestep','HowitworksdonotsettlestepController@index');
    Route::get('/howitworksdonotsettlestep/export/excel','HowitworksdonotsettlestepController@ExportExcel');
    Route::get('/howitworksdonotsettlestep/export/pdf','HowitworksdonotsettlestepController@ExportPDF');
    Route::post('/howitworksdonotsettlestep','HowitworksdonotsettlestepController@store');
    Route::post('/howitworksdonotsettlestep/ajax','HowitworksdonotsettlestepController@ajaxSave');
    Route::post('/howitworksdonotsettlestep/datatable/ajax','HowitworksdonotsettlestepController@datatable');
    Route::post('/howitworksdonotsettlestep/update/{id}','HowitworksdonotsettlestepController@update');
    //======================== Howitworksdonotsettlestep Route End ===============================//
    //======================== Howitworkcaseswefund Route Start ===============================//
    Route::get('/howitworkcaseswefund/list','HowitworkcaseswefundController@show');
    Route::get('/howitworkcaseswefund/create','HowitworkcaseswefundController@create');
    Route::get('/howitworkcaseswefund/edit/{id}','HowitworkcaseswefundController@edit');
    Route::get('/howitworkcaseswefund/delete/{id}','HowitworkcaseswefundController@destroy');
    Route::get('/howitworkcaseswefund','HowitworkcaseswefundController@index');
    Route::get('/howitworkcaseswefund/export/excel','HowitworkcaseswefundController@ExportExcel');
    Route::get('/howitworkcaseswefund/export/pdf','HowitworkcaseswefundController@ExportPDF');
    Route::post('/howitworkcaseswefund','HowitworkcaseswefundController@store');
    Route::post('/howitworkcaseswefund/ajax','HowitworkcaseswefundController@ajaxSave');
    Route::post('/howitworkcaseswefund/datatable/ajax','HowitworkcaseswefundController@datatable');
    Route::post('/howitworkcaseswefund/update/{id}','HowitworkcaseswefundController@update');
    //======================== Howitworkcaseswefund Route End ===============================//
    //======================== Howitworksecuringthemoney Route Start ===============================//
    Route::get('/howitworksecuringthemoney/list','HowitworksecuringthemoneyController@show');
    Route::get('/howitworksecuringthemoney/create','HowitworksecuringthemoneyController@create');
    Route::get('/howitworksecuringthemoney/edit/{id}','HowitworksecuringthemoneyController@edit');
    Route::get('/howitworksecuringthemoney/delete/{id}','HowitworksecuringthemoneyController@destroy');
    Route::get('/howitworksecuringthemoney','HowitworksecuringthemoneyController@index');
    Route::get('/howitworksecuringthemoney/export/excel','HowitworksecuringthemoneyController@ExportExcel');
    Route::get('/howitworksecuringthemoney/export/pdf','HowitworksecuringthemoneyController@ExportPDF');
    Route::post('/howitworksecuringthemoney','HowitworksecuringthemoneyController@store');
    Route::post('/howitworksecuringthemoney/ajax','HowitworksecuringthemoneyController@ajaxSave');
    Route::post('/howitworksecuringthemoney/datatable/ajax','HowitworksecuringthemoneyController@datatable');
    Route::post('/howitworksecuringthemoney/update/{id}','HowitworksecuringthemoneyController@update');
    //======================== Howitworksecuringthemoney Route End ===============================//
    //======================== Typesoffundingpresettlement Route Start ===============================//
    Route::get('/typesoffundingpresettlement/list','TypesoffundingpresettlementController@show');
    Route::get('/typesoffundingpresettlement/create','TypesoffundingpresettlementController@create');
    Route::get('/typesoffundingpresettlement/edit/{id}','TypesoffundingpresettlementController@edit');
    Route::get('/typesoffundingpresettlement/delete/{id}','TypesoffundingpresettlementController@destroy');
    Route::get('/typesoffundingpresettlement','TypesoffundingpresettlementController@index');
    Route::get('/typesoffundingpresettlement/export/excel','TypesoffundingpresettlementController@ExportExcel');
    Route::get('/typesoffundingpresettlement/export/pdf','TypesoffundingpresettlementController@ExportPDF');
    Route::post('/typesoffundingpresettlement','TypesoffundingpresettlementController@store');
    Route::post('/typesoffundingpresettlement/ajax','TypesoffundingpresettlementController@ajaxSave');
    Route::post('/typesoffundingpresettlement/datatable/ajax','TypesoffundingpresettlementController@datatable');
    Route::post('/typesoffundingpresettlement/update/{id}','TypesoffundingpresettlementController@update');
    //======================== Typesoffundingpresettlement Route End ===============================//
    //======================== Typesoffundingpresettlement Route Start ===============================//
    Route::get('/typesoffundingpresettlement/list','TypesoffundingpresettlementController@show');
    Route::get('/typesoffundingpresettlement/create','TypesoffundingpresettlementController@create');
    Route::get('/typesoffundingpresettlement/edit/{id}','TypesoffundingpresettlementController@edit');
    Route::get('/typesoffundingpresettlement/delete/{id}','TypesoffundingpresettlementController@destroy');
    Route::get('/typesoffundingpresettlement','TypesoffundingpresettlementController@index');
    Route::get('/typesoffundingpresettlement/export/excel','TypesoffundingpresettlementController@ExportExcel');
    Route::get('/typesoffundingpresettlement/export/pdf','TypesoffundingpresettlementController@ExportPDF');
    Route::post('/typesoffundingpresettlement','TypesoffundingpresettlementController@store');
    Route::post('/typesoffundingpresettlement/ajax','TypesoffundingpresettlementController@ajaxSave');
    Route::post('/typesoffundingpresettlement/datatable/ajax','TypesoffundingpresettlementController@datatable');
    Route::post('/typesoffundingpresettlement/update/{id}','TypesoffundingpresettlementController@update');
    //======================== Typesoffundingpresettlement Route End ===============================//
    //======================== Fundingform Route Start ===============================//
    Route::get('/fundingform/list','FundingformController@show');
    Route::get('/fundingform/create','FundingformController@create');
    Route::get('/fundingform/edit/{id}','FundingformController@edit');
    Route::get('/fundingform/delete/{id}','FundingformController@destroy');
    Route::get('/fundingform','FundingformController@index');
    Route::get('/fundingform/export/excel','FundingformController@ExportExcel');
    Route::get('/fundingform/export/pdf','FundingformController@ExportPDF');
    Route::post('/fundingform','FundingformController@store');
    Route::post('/fundingform/ajax','FundingformController@ajaxSave');
    Route::post('/fundingform/datatable/ajax','FundingformController@datatable');
    Route::post('/fundingform/update/{id}','FundingformController@update');
    //======================== Fundingform Route End ===============================//
    //======================== Typesoffundcaseswefundtype Route Start ===============================//
    Route::get('/typesoffundcaseswefundtype/list','TypesoffundcaseswefundtypeController@show');
    Route::get('/typesoffundcaseswefundtype/create','TypesoffundcaseswefundtypeController@create');
    Route::get('/typesoffundcaseswefundtype/edit/{id}','TypesoffundcaseswefundtypeController@edit');
    Route::get('/typesoffundcaseswefundtype/delete/{id}','TypesoffundcaseswefundtypeController@destroy');
    Route::get('/typesoffundcaseswefundtype','TypesoffundcaseswefundtypeController@index');
    Route::get('/typesoffundcaseswefundtype/export/excel','TypesoffundcaseswefundtypeController@ExportExcel');
    Route::get('/typesoffundcaseswefundtype/export/pdf','TypesoffundcaseswefundtypeController@ExportPDF');
    Route::post('/typesoffundcaseswefundtype','TypesoffundcaseswefundtypeController@store');
    Route::post('/typesoffundcaseswefundtype/ajax','TypesoffundcaseswefundtypeController@ajaxSave');
    Route::post('/typesoffundcaseswefundtype/datatable/ajax','TypesoffundcaseswefundtypeController@datatable');
    Route::post('/typesoffundcaseswefundtype/update/{id}','TypesoffundcaseswefundtypeController@update');
    //======================== Typesoffundcaseswefundtype Route End ===============================//
    //======================== Aboutpagesetting Route Start ===============================//
    Route::get('/aboutpagesetting/list','AboutpagesettingController@show');
    Route::get('/aboutpagesetting/create','AboutpagesettingController@create');
    Route::get('/aboutpagesetting/edit/{id}','AboutpagesettingController@edit');
    Route::get('/aboutpagesetting/delete/{id}','AboutpagesettingController@destroy');
    Route::get('/aboutpagesetting','AboutpagesettingController@index');
    Route::get('/aboutpagesetting/export/excel','AboutpagesettingController@ExportExcel');
    Route::get('/aboutpagesetting/export/pdf','AboutpagesettingController@ExportPDF');
    Route::post('/aboutpagesetting','AboutpagesettingController@store');
    Route::post('/aboutpagesetting/ajax','AboutpagesettingController@ajaxSave');
    Route::post('/aboutpagesetting/datatable/ajax','AboutpagesettingController@datatable');
    Route::post('/aboutpagesetting/update/{id}','AboutpagesettingController@update');
    //======================== Aboutpagesetting Route End ===============================//
    //======================== Aboutmilestones Route Start ===============================//
    Route::get('/aboutmilestones/list','AboutmilestonesController@show');
    Route::get('/aboutmilestones/create','AboutmilestonesController@create');
    Route::get('/aboutmilestones/edit/{id}','AboutmilestonesController@edit');
    Route::get('/aboutmilestones/delete/{id}','AboutmilestonesController@destroy');
    Route::get('/aboutmilestones','AboutmilestonesController@index');
    Route::get('/aboutmilestones/export/excel','AboutmilestonesController@ExportExcel');
    Route::get('/aboutmilestones/export/pdf','AboutmilestonesController@ExportPDF');
    Route::post('/aboutmilestones','AboutmilestonesController@store');
    Route::post('/aboutmilestones/ajax','AboutmilestonesController@ajaxSave');
    Route::post('/aboutmilestones/datatable/ajax','AboutmilestonesController@datatable');
    Route::post('/aboutmilestones/update/{id}','AboutmilestonesController@update');
    //======================== Aboutmilestones Route End ===============================//
    //======================== Meetleadersetting Route Start ===============================//
    Route::get('/meetleadersetting/list','MeetleadersettingController@show');
    Route::get('/meetleadersetting/create','MeetleadersettingController@create');
    Route::get('/meetleadersetting/edit/{id}','MeetleadersettingController@edit');
    Route::get('/meetleadersetting/delete/{id}','MeetleadersettingController@destroy');
    Route::get('/meetleadersetting','MeetleadersettingController@index');
    Route::get('/meetleadersetting/export/excel','MeetleadersettingController@ExportExcel');
    Route::get('/meetleadersetting/export/pdf','MeetleadersettingController@ExportPDF');
    Route::post('/meetleadersetting','MeetleadersettingController@store');
    Route::post('/meetleadersetting/ajax','MeetleadersettingController@ajaxSave');
    Route::post('/meetleadersetting/datatable/ajax','MeetleadersettingController@datatable');
    Route::post('/meetleadersetting/update/{id}','MeetleadersettingController@update');
    //======================== Meetleadersetting Route End ===============================//
    //======================== Teammember Route Start ===============================//
    Route::get('/teammember/list','TeammemberController@show');
    Route::get('/teammember/create','TeammemberController@create');
    Route::get('/teammember/edit/{id}','TeammemberController@edit');
    Route::get('/teammember/delete/{id}','TeammemberController@destroy');
    Route::get('/teammember','TeammemberController@index');
    Route::get('/teammember/export/excel','TeammemberController@ExportExcel');
    Route::get('/teammember/export/pdf','TeammemberController@ExportPDF');
    Route::post('/teammember','TeammemberController@store');
    Route::post('/teammember/ajax','TeammemberController@ajaxSave');
    Route::post('/teammember/datatable/ajax','TeammemberController@datatable');
    Route::post('/teammember/update/{id}','TeammemberController@update');
    //======================== Teammember Route End ===============================//
    //======================== Aboutmeetourteam Route Start ===============================//
    Route::get('/aboutmeetourteam/list','AboutmeetourteamController@show');
    Route::get('/aboutmeetourteam/create','AboutmeetourteamController@create');
    Route::get('/aboutmeetourteam/edit/{id}','AboutmeetourteamController@edit');
    Route::get('/aboutmeetourteam/delete/{id}','AboutmeetourteamController@destroy');
    Route::get('/aboutmeetourteam','AboutmeetourteamController@index');
    Route::get('/aboutmeetourteam/export/excel','AboutmeetourteamController@ExportExcel');
    Route::get('/aboutmeetourteam/export/pdf','AboutmeetourteamController@ExportPDF');
    Route::post('/aboutmeetourteam','AboutmeetourteamController@store');
    Route::post('/aboutmeetourteam/ajax','AboutmeetourteamController@ajaxSave');
    Route::post('/aboutmeetourteam/datatable/ajax','AboutmeetourteamController@datatable');
    Route::post('/aboutmeetourteam/update/{id}','AboutmeetourteamController@update');
    //======================== Aboutmeetourteam Route End ===============================//
    //======================== Aboutmeetourteammember Route Start ===============================//
    Route::get('/aboutmeetourteammember/list','AboutmeetourteammemberController@show');
    Route::get('/aboutmeetourteammember/create','AboutmeetourteammemberController@create');
    Route::get('/aboutmeetourteammember/edit/{id}','AboutmeetourteammemberController@edit');
    Route::get('/aboutmeetourteammember/delete/{id}','AboutmeetourteammemberController@destroy');
    Route::get('/aboutmeetourteammember','AboutmeetourteammemberController@index');
    Route::get('/aboutmeetourteammember/export/excel','AboutmeetourteammemberController@ExportExcel');
    Route::get('/aboutmeetourteammember/export/pdf','AboutmeetourteammemberController@ExportPDF');
    Route::post('/aboutmeetourteammember','AboutmeetourteammemberController@store');
    Route::post('/aboutmeetourteammember/ajax','AboutmeetourteammemberController@ajaxSave');
    Route::post('/aboutmeetourteammember/datatable/ajax','AboutmeetourteammemberController@datatable');
    Route::post('/aboutmeetourteammember/update/{id}','AboutmeetourteammemberController@update');
    //======================== Aboutmeetourteammember Route End ===============================//


    //======================== Aboutworkatadvantagelending Route Start ===============================//
    Route::get('/aboutworkatadvantagelending/list','AboutworkatadvantagelendingController@show');
    Route::get('/aboutworkatadvantagelending/create','AboutworkatadvantagelendingController@create');
    Route::get('/aboutworkatadvantagelending/edit/{id}','AboutworkatadvantagelendingController@edit');
    Route::get('/aboutworkatadvantagelending/delete/{id}','AboutworkatadvantagelendingController@destroy');
    Route::get('/aboutworkatadvantagelending','AboutworkatadvantagelendingController@index');
    Route::get('/aboutworkatadvantagelending/export/excel','AboutworkatadvantagelendingController@ExportExcel');
    Route::get('/aboutworkatadvantagelending/export/pdf','AboutworkatadvantagelendingController@ExportPDF');
    Route::post('/aboutworkatadvantagelending','AboutworkatadvantagelendingController@store');
    Route::post('/aboutworkatadvantagelending/ajax','AboutworkatadvantagelendingController@ajaxSave');
    Route::post('/aboutworkatadvantagelending/datatable/ajax','AboutworkatadvantagelendingController@datatable');
    Route::post('/aboutworkatadvantagelending/update/{id}','AboutworkatadvantagelendingController@update');
    //======================== Aboutworkatadvantagelending Route End ===============================//
    //======================== Aboutmediasetting Route Start ===============================//
    Route::get('/aboutmediasetting/list','AboutmediasettingController@show');
    Route::get('/aboutmediasetting/create','AboutmediasettingController@create');
    Route::get('/aboutmediasetting/edit/{id}','AboutmediasettingController@edit');
    Route::get('/aboutmediasetting/delete/{id}','AboutmediasettingController@destroy');
    Route::get('/aboutmediasetting','AboutmediasettingController@index');
    Route::get('/aboutmediasetting/export/excel','AboutmediasettingController@ExportExcel');
    Route::get('/aboutmediasetting/export/pdf','AboutmediasettingController@ExportPDF');
    Route::post('/aboutmediasetting','AboutmediasettingController@store');
    Route::post('/aboutmediasetting/ajax','AboutmediasettingController@ajaxSave');
    Route::post('/aboutmediasetting/datatable/ajax','AboutmediasettingController@datatable');
    Route::post('/aboutmediasetting/update/{id}','AboutmediasettingController@update');
    //======================== Aboutmediasetting Route End ===============================//
    //======================== Aboutmedia Route Start ===============================//
    Route::get('/aboutmedia/list','AboutmediaController@show');
    Route::get('/aboutmedia/create','AboutmediaController@create');
    Route::get('/aboutmedia/edit/{id}','AboutmediaController@edit');
    Route::get('/aboutmedia/delete/{id}','AboutmediaController@destroy');
    Route::get('/aboutmedia','AboutmediaController@index');
    Route::get('/aboutmedia/export/excel','AboutmediaController@ExportExcel');
    Route::get('/aboutmedia/export/pdf','AboutmediaController@ExportPDF');
    Route::post('/aboutmedia','AboutmediaController@store');
    Route::post('/aboutmedia/ajax','AboutmediaController@ajaxSave');
    Route::post('/aboutmedia/datatable/ajax','AboutmediaController@datatable');
    Route::post('/aboutmedia/update/{id}','AboutmediaController@update');
    //======================== Aboutmedia Route End ===============================//
    //======================== Forattorneypagesetting Route Start ===============================//
    Route::get('/forattorneypagesetting/list','ForattorneypagesettingController@show');
    Route::get('/forattorneypagesetting/create','ForattorneypagesettingController@create');
    Route::get('/forattorneypagesetting/edit/{id}','ForattorneypagesettingController@edit');
    Route::get('/forattorneypagesetting/delete/{id}','ForattorneypagesettingController@destroy');
    Route::get('/forattorneypagesetting','ForattorneypagesettingController@index');
    Route::get('/forattorneypagesetting/export/excel','ForattorneypagesettingController@ExportExcel');
    Route::get('/forattorneypagesetting/export/pdf','ForattorneypagesettingController@ExportPDF');
    Route::post('/forattorneypagesetting','ForattorneypagesettingController@store');
    Route::post('/forattorneypagesetting/ajax','ForattorneypagesettingController@ajaxSave');
    Route::post('/forattorneypagesetting/datatable/ajax','ForattorneypagesettingController@datatable');
    Route::post('/forattorneypagesetting/update/{id}','ForattorneypagesettingController@update');
    //======================== Forattorneypagesetting Route End ===============================//
    //======================== Foratterneyportalsimplify Route Start ===============================//
    Route::get('/foratterneyportalsimplify/list','ForatterneyportalsimplifyController@show');
    Route::get('/foratterneyportalsimplify/create','ForatterneyportalsimplifyController@create');
    Route::get('/foratterneyportalsimplify/edit/{id}','ForatterneyportalsimplifyController@edit');
    Route::get('/foratterneyportalsimplify/delete/{id}','ForatterneyportalsimplifyController@destroy');
    Route::get('/foratterneyportalsimplify','ForatterneyportalsimplifyController@index');
    Route::get('/foratterneyportalsimplify/export/excel','ForatterneyportalsimplifyController@ExportExcel');
    Route::get('/foratterneyportalsimplify/export/pdf','ForatterneyportalsimplifyController@ExportPDF');
    Route::post('/foratterneyportalsimplify','ForatterneyportalsimplifyController@store');
    Route::post('/foratterneyportalsimplify/ajax','ForatterneyportalsimplifyController@ajaxSave');
    Route::post('/foratterneyportalsimplify/datatable/ajax','ForatterneyportalsimplifyController@datatable');
    Route::post('/foratterneyportalsimplify/update/{id}','ForatterneyportalsimplifyController@update');
    //======================== Foratterneyportalsimplify Route End ===============================//
    //======================== Forattorneyknownandrecognized Route Start ===============================//
    Route::get('/forattorneyknownandrecognized/list','ForattorneyknownandrecognizedController@show');
    Route::get('/forattorneyknownandrecognized/create','ForattorneyknownandrecognizedController@create');
    Route::get('/forattorneyknownandrecognized/edit/{id}','ForattorneyknownandrecognizedController@edit');
    Route::get('/forattorneyknownandrecognized/delete/{id}','ForattorneyknownandrecognizedController@destroy');
    Route::get('/forattorneyknownandrecognized','ForattorneyknownandrecognizedController@index');
    Route::get('/forattorneyknownandrecognized/export/excel','ForattorneyknownandrecognizedController@ExportExcel');
    Route::get('/forattorneyknownandrecognized/export/pdf','ForattorneyknownandrecognizedController@ExportPDF');
    Route::post('/forattorneyknownandrecognized','ForattorneyknownandrecognizedController@store');
    Route::post('/forattorneyknownandrecognized/ajax','ForattorneyknownandrecognizedController@ajaxSave');
    Route::post('/forattorneyknownandrecognized/datatable/ajax','ForattorneyknownandrecognizedController@datatable');
    Route::post('/forattorneyknownandrecognized/update/{id}','ForattorneyknownandrecognizedController@update');
    //======================== Forattorneyknownandrecognized Route End ===============================//
    //======================== Forattorneysettlementfundingprocess Route Start ===============================//
    Route::get('/forattorneysettlementfundingprocess/list','ForattorneysettlementfundingprocessController@show');
    Route::get('/forattorneysettlementfundingprocess/create','ForattorneysettlementfundingprocessController@create');
    Route::get('/forattorneysettlementfundingprocess/edit/{id}','ForattorneysettlementfundingprocessController@edit');
    Route::get('/forattorneysettlementfundingprocess/delete/{id}','ForattorneysettlementfundingprocessController@destroy');
    Route::get('/forattorneysettlementfundingprocess','ForattorneysettlementfundingprocessController@index');
    Route::get('/forattorneysettlementfundingprocess/export/excel','ForattorneysettlementfundingprocessController@ExportExcel');
    Route::get('/forattorneysettlementfundingprocess/export/pdf','ForattorneysettlementfundingprocessController@ExportPDF');
    Route::post('/forattorneysettlementfundingprocess','ForattorneysettlementfundingprocessController@store');
    Route::post('/forattorneysettlementfundingprocess/ajax','ForattorneysettlementfundingprocessController@ajaxSave');
    Route::post('/forattorneysettlementfundingprocess/datatable/ajax','ForattorneysettlementfundingprocessController@datatable');
    Route::post('/forattorneysettlementfundingprocess/update/{id}','ForattorneysettlementfundingprocessController@update');
    //======================== Forattorneysettlementfundingprocess Route End ===============================//
    //======================== Forattorneyproductandservice Route Start ===============================//
    Route::get('/forattorneyproductandservice/list','ForattorneyproductandserviceController@show');
    Route::get('/forattorneyproductandservice/create','ForattorneyproductandserviceController@create');
    Route::get('/forattorneyproductandservice/edit/{id}','ForattorneyproductandserviceController@edit');
    Route::get('/forattorneyproductandservice/delete/{id}','ForattorneyproductandserviceController@destroy');
    Route::get('/forattorneyproductandservice','ForattorneyproductandserviceController@index');
    Route::get('/forattorneyproductandservice/export/excel','ForattorneyproductandserviceController@ExportExcel');
    Route::get('/forattorneyproductandservice/export/pdf','ForattorneyproductandserviceController@ExportPDF');
    Route::post('/forattorneyproductandservice','ForattorneyproductandserviceController@store');
    Route::post('/forattorneyproductandservice/ajax','ForattorneyproductandserviceController@ajaxSave');
    Route::post('/forattorneyproductandservice/datatable/ajax','ForattorneyproductandserviceController@datatable');
    Route::post('/forattorneyproductandservice/update/{id}','ForattorneyproductandserviceController@update');
    //======================== Forattorneyproductandservice Route End ===============================//
    //======================== Forbrokerpagesetting Route Start ===============================//
    Route::get('/forbrokerpagesetting/list','ForbrokerpagesettingController@show');
    Route::get('/forbrokerpagesetting/create','ForbrokerpagesettingController@create');
    Route::get('/forbrokerpagesetting/edit/{id}','ForbrokerpagesettingController@edit');
    Route::get('/forbrokerpagesetting/delete/{id}','ForbrokerpagesettingController@destroy');
    Route::get('/forbrokerpagesetting','ForbrokerpagesettingController@index');
    Route::get('/forbrokerpagesetting/export/excel','ForbrokerpagesettingController@ExportExcel');
    Route::get('/forbrokerpagesetting/export/pdf','ForbrokerpagesettingController@ExportPDF');
    Route::post('/forbrokerpagesetting','ForbrokerpagesettingController@store');
    Route::post('/forbrokerpagesetting/ajax','ForbrokerpagesettingController@ajaxSave');
    Route::post('/forbrokerpagesetting/datatable/ajax','ForbrokerpagesettingController@datatable');
    Route::post('/forbrokerpagesetting/update/{id}','ForbrokerpagesettingController@update');
    //======================== Forbrokerpagesetting Route End ===============================//
    //======================== Contactus Route Start ===============================//
    Route::get('/contactus/list','ContactusController@show');
    Route::get('/contactus/create','ContactusController@create');
    Route::get('/contactus/edit/{id}','ContactusController@edit');
    Route::get('/contactus/delete/{id}','ContactusController@destroy');
    Route::get('/contactus','ContactusController@index');
    Route::get('/contactus/export/excel','ContactusController@ExportExcel');
    Route::get('/contactus/export/pdf','ContactusController@ExportPDF');
    Route::post('/contactus','ContactusController@store');
    Route::post('/contactus/ajax','ContactusController@ajaxSave');
    Route::post('/contactus/datatable/ajax','ContactusController@datatable');
    Route::post('/contactus/update/{id}','ContactusController@update');
    //======================== Contactus Route End ===============================//

    //======================== Careerpagesetting Route Start ===============================//
    Route::get('/careerpagesetting/list', 'CareerpagesettingController@show');
    Route::get('/careerpagesetting/create', 'CareerpagesettingController@create');
    Route::get('/careerpagesetting/edit/{id}', 'CareerpagesettingController@edit');
    Route::get('/careerpagesetting/delete/{id}', 'CareerpagesettingController@destroy');
    Route::get('/careerpagesetting', 'CareerpagesettingController@index');
    Route::get('/careerpagesetting/export/excel', 'CareerpagesettingController@ExportExcel');
    Route::get('/careerpagesetting/export/pdf', 'CareerpagesettingController@ExportPDF');
    Route::post('/careerpagesetting', 'CareerpagesettingController@store');
    Route::post('/careerpagesetting/ajax', 'CareerpagesettingController@ajaxSave');
    Route::post('/careerpagesetting/datatable/ajax', 'CareerpagesettingController@datatable');
    Route::post('/careerpagesetting/update/{id}', 'CareerpagesettingController@update');
    //======================== Careerpagesetting Route End ===============================//
    
});

//======================== Careerpost Route Start ===============================//
Route::get('/careerpost/list','CareerpostController@show');
Route::get('/careerpost/create','CareerpostController@create');
Route::get('/careerpost/edit/{id}','CareerpostController@edit');
Route::get('/careerpost/delete/{id}','CareerpostController@destroy');
Route::get('/careerpost','CareerpostController@index');
Route::get('/careerpost/export/excel','CareerpostController@ExportExcel');
Route::get('/careerpost/export/pdf','CareerpostController@ExportPDF');
Route::post('/careerpost','CareerpostController@store');
Route::post('/careerpost/ajax','CareerpostController@ajaxSave');
Route::post('/careerpost/datatable/ajax','CareerpostController@datatable');
Route::post('/careerpost/update/{id}','CareerpostController@update');
//======================== Careerpost Route End ===============================//