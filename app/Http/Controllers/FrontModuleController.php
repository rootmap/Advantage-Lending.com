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

use App\HelpOnManyCase;
use App\HelpOnManyCaseTypes;
use App\NeverSettleForLess;

use App\ResourceContent;
use App\ResourcePageSetting;

use App\GlossarySectionContent;
use App\Glossary;

use App\FAQCategory;
use App\FAQContent;
use App\FaqPageSetting;

use App\PrivacyPolicyPage;

use App\TermsOfUse;

use App\StateSpecificLicenses;

use App\HowitWorksPageSetting;
use App\HowItWorkCasesWeFund;
use App\howitworksdonotsettleforless;
use App\HowItWorkSecuringTheMoney;
use App\HowItWorksDoNotSettleStep;

use App\TypeofFundPage;
use App\Typesoffundingpresettlement;
use App\FundingForm;
use App\TypesOfFundCasesWeFundType;

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

    private function faqData(){
        $data=[];
        $FAQCategory= FAQCategory::where('module_status','Active')->get();
        foreach ($FAQCategory as $key => $row) {
            $FAQContent= FAQContent::where('module_status','Active')->where('category_id', $row->id)->get();
            $array=[
                'id'=>$row->id,
                'name'=>$row->name,
                'contentData'=> $FAQContent,
            ];
            $data[]=$array;
        }

        return $data;

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
        $HelpOnManyCase= HelpOnManyCase::orderBy('id', 'DESC')->first();
        $NeverSettleForLess= NeverSettleForLess::orderBy('id', 'DESC')->first();
        $HelpOnManyCaseTypes= HelpOnManyCaseTypes::where('module_status','Active')->orderBy('id', 'ASC')->get();


        $GlossarySectionContent= GlossarySectionContent::orderBy('id', 'DESC')->first();
        $Glossary= Glossary::where('module_status','Active')->orderBy('id', 'ASC')->get();
        
        
        //dd($BetterDaysStart);
        return view('site.pages.index',
                        compact(
                            'slider', 
                            'HowWeHelp', 
                            'BetterDaysStart', 
                            'FundingNeedPageContent', 
                            'FundingYouNeed',
                            'YouAreNotAlone',
                            'YouAreNotAloneVideo',
                            'HelpOnManyCase',
                            'HelpOnManyCaseTypes',
                            'NeverSettleForLess',
                            'GlossarySectionContent',
                            'Glossary'
                        )
                    );
    }

    public function howitworks()
    {
        $HowitWorksPageSetting= HowitWorksPageSetting::where('module_status','Active')->orderBy('id', 'DESC')->first();
        $howitworksdonotsettleforless= howitworksdonotsettleforless::orderBy('id', 'DESC')->first();
        $HowItWorksDoNotSettleStep= HowItWorksDoNotSettleStep::where('module_status','Active')->orderBy('id', 'ASC')->get();
        $HowItWorkCasesWeFund= HowItWorkCasesWeFund::orderBy('id', 'DESC')->first();
        $HowItWorkSecuringTheMoney= HowItWorkSecuringTheMoney::orderBy('id', 'DESC')->first();
        //dd($HowitWorksPageSetting);
        return view('site.pages.how-it-works',
                        compact(
                            'HowitWorksPageSetting',
                            'howitworksdonotsettleforless',
                            'HowItWorksDoNotSettleStep',
                            'HowItWorkCasesWeFund',
                            'HowItWorkSecuringTheMoney'
                        )
                    );
    }

    public function typesoffunding()
    {
        $typeoffundpage= TypeofFundPage::where('module_status','Active')->orderBy('id', 'DESC')->first();
        $caseswefundtype= Typesoffundingpresettlement::orderBy('id', 'DESC')->first();
        $FundingForm= FundingForm::where('module_status','Active')->orderBy('id', 'ASC')->get();
        $CasesWeFundType= TypesOfFundCasesWeFundType::orderBy('id', 'DESC')->first();
        $HelpOnManyCaseTypes= HelpOnManyCaseTypes::where('module_status','Active')->orderBy('id', 'ASC')->get();
        //dd($HelpOnManyCaseTypes);
        return view('site.pages.types-of-funding',
                        compact(
                            'typeoffundpage',
                            'caseswefundtype',
                            'FundingForm',
                            'CasesWeFundType',
                            'HelpOnManyCaseTypes'
                            )
                    );
    }

    public function about()
    {
        return view('site.pages.about');
    }

    public function faq()
    {
        $faq = $this->faqData();
        $faqinfo = FaqPageSetting::where('module_status','Active')->orderBy('id', 'DESC')->first();
       // dd($faqinfo);
        return view('site.pages.faq',compact('faq','faqinfo'));
    }

    public function forattorneys()
    {
        return view('site.pages.for-attorneys');
    }

    public function resources()
    {
        $ResourceContentInfo= ResourcePageSetting::where('module_status','Active')->orderBy('id', 'DESC')->first();
        $ResourceContent= ResourceContent::where('module_status','Active')->orderBy('id', 'DESC')->get();
        //dd($ResourceContent);
        return view('site.pages.resource',
                    compact(
                        'ResourceContentInfo',
                        'ResourceContent'
                    )
                );
    }

    public function resourcesDetails(request $request, $id=0,$title='')
    {
        $details= ResourceContent::find($id);
        $ResourceContent= ResourceContent::where('module_status','Active')->orderBy('id', 'DESC')->get();
        //dd($details);
        return view('site.pages.resource-details',compact('details','ResourceContent'));
    }
    public function resourcesSearch(request $request)
    {
        $serach = $request->search_field;
        $query = ResourceContent::where('title', 'LIKE', '%' . $serach . '%')->orderBy('id', 'DESC')->get();
        //dd($query);
        return view('site.pages.resource-search',compact('query'));
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
        $tabCount=TermsOfUse::where('module_status','Active')->count();
        if($tabCount==0)
        {
            return redirect(url('home'));
        }
        else
        {
            $TermsOfUse= TermsOfUse::where('module_status','Active')->first();
            return view('site.pages.terms-of-use',compact('TermsOfUse'));
        }
    }
    public function privacyPolicy()
    {
        $tabCount=PrivacyPolicyPage::where('module_status','Active')->count();
        if($tabCount==0)
        {
            return redirect(url('home'));
        }
        else
        {
            $PrivacyPolicy= PrivacyPolicyPage::where('module_status','Active')->first();
            return view('site.pages.privacy-policy',compact('PrivacyPolicy'));
        }
    }
    public function stateSpecificLicenses()
    {
        $tabCount=StateSpecificLicenses::where('module_status','Active')->count();
        if($tabCount==0)
        {
            return redirect(url('home'));
        }
        else
        {
            $licenses= StateSpecificLicenses::where('module_status','Active')->first();
            return view('site.pages.state-specific-licenses',compact('licenses'));
        }
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
