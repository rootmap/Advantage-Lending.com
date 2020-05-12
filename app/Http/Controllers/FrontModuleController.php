<?php

namespace App\Http\Controllers;

use App\FrontModule;
use App\Slider;
use App\HowWeHelp;
use App\BetterDaysStart;
use App\FundingNeedPageContent;
use App\FundingYouNeed;

use App\YOUARENOTALONE;
use App\YouAreNotAloneVideo;

use Illuminate\Http\Request;

class FrontModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $moduleName = "";
    private $sdc;
    public function __construct()
    {
        $this->sdc = new CoreCustomController();
    }

    public function index()
    {
        $slider= Slider::orderBy('id','DESC')->first();
        $HowWeHelp= HowWeHelp::orderBy('id', 'DESC')->first();
        $BetterDaysStart= BetterDaysStart::orderBy('id', 'DESC')->first();
        $FundingNeedPageContent= FundingNeedPageContent::orderBy('id', 'DESC')->first();
        $FundingYouNeed= FundingYouNeed::where('module_status','Active')->orderBy('id', 'ASC')->get();
        $YouAreNotAlone= YOUARENOTALONE::orderBy('id', 'DESC')->first();
        $YouAreNotAloneVideo= YouAreNotAloneVideo::where('module_status','Active')->orderBy('id', 'ASC')->get();
        
        
        //dd($BetterDaysStart);
        return view('site.pages.index',
                        compact(
                            'slider', 
                            'HowWeHelp', 
                            'BetterDaysStart', 
                            'FundingNeedPageContent', 
                            'FundingYouNeed',
                            'YouAreNotAlone',
                            'YouAreNotAloneVideo'
                        )
                    );
    }

    public function howitworks()
    {
        return view('site.pages.how-it-works');
    }

    public function typesoffunding()
    {
        return view('site.pages.types-of-funding');
    }

    public function about()
    {
        return view('site.pages.about');
    }

    public function faq()
    {
        return view('site.pages.faq');
    }

    public function forattorneys()
    {
        return view('site.pages.for-attorneys');
    }

    public function resources()
    {
        return view('site.pages.resource');
    }

    public function resourcesDetails()
    {
        return view('site.pages.resource-details');
    }

    public function contactus()
    {
        return view('site.pages.contactus');
    }

    public function careers()
    {
        return view('site.pages.careers');
    }

    public function forbrokers()
    {
        return view('site.pages.for-brokers');
    }

    public function completeapplication()
    {
        return view('site.pages.complete-application');
    }

    public function structuredsettlementapplicationform()
    {
        return view('site.pages.structured-settlement-application-form');
    }

    public function inheritancefunding()
    {
        return view('site.pages.inheritance-funding');
    }

    public function needanattorney()
    {
        return view('site.pages.need-an-attorney');
    }
    public function termsOfUse()
    {
        return view('site.pages.terms-of-use');
    }
    public function privacyPolicy()
    {
        return view('site.pages.privacy-policy');
    }
    public function stateSpecificLicenses()
    {
        return view('site.pages.state-specific-licenses');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function show(FrontModule $frontModule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function edit(FrontModule $frontModule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FrontModule $frontModule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FrontModule  $frontModule
     * @return \Illuminate\Http\Response
     */
    public function destroy(FrontModule $frontModule)
    {
        //
    }
}
