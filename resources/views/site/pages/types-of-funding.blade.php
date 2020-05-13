@extends('site.layout.master')
@section('title','Types of funding')
@section('css')
    <style type="text/css">
        .innerpage-titlebar {
            padding: 80px 0 80px;
            position: relative;
            background: url("{{asset('upload/typeoffundpage/'.$typeoffundpage->background_image)}}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .section-area {
            overflow-x: hidden;
            padding: 60px 0 60px;
        }
        .left-block{
            margin-left: 45px;
        }
        .py-5.bg-info {
            /*margin-bottom: -60px;*/
            margin-top: 20px;
        }
        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .separator-left.wow {
            visibility: visible !important;
        }
        .separator-left {
            position: relative;
            display: inline-block;
            margin-bottom: 4rem;
        }
        h2, h3, h4, h5, h6, .h2, .h3, .h4, .h5, .h6 {
            text-transform: none !important;
        }
        h2, .h2 {
            font-size: 3.5rem;
        }
        h1, h2, h3, h4, h5, h6, .h1, .h2, .h4, .h5, .h6 {
            /*margin-bottom: .5rem;*/
            font-family: adelle,serif;
            font-weight: 700;
            line-height: 1.2;
            color: #133d8d;
        }
        .pt-3, .py-3 {
            padding-top: 1rem !important;
        }
        .pb-3, .py-3 {
            padding-bottom: 1rem !important;
        }
        .mt-4, .my-4 {
            margin-top: 1.5rem !important;
        }
        .d-inline-block {
            display: inline-block !important;
        }
        .border-white {
            border-color: #fff !important;
        }
        .border-bottom {
            border-bottom: 1px solid #dee2e6 !important;
        }
        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .feat .d-inline-block {
            min-width: 70px;
        }
        .bg-white {
            background-color: #fff !important;
        }
        
        
        @media (min-width: 768px){
            .pl-md-4, .px-md-4 {
                padding-left: 1.5rem !important;
            }
            .pt-md-6, .py-md-6 {
                padding-top: 4rem !important;
            }
            .pb-md-6, .py-md-6 {
                padding-bottom: 4rem !important;
            }
            .pb-md-5, .py-md-5 {
                padding-bottom: 3rem !important;
            }
            .mb-md-5, .my-md-5 {
                margin-bottom: 3rem !important;
            }
        }
        .font-size-16 {
            font-size: 16px;
        }
        .no-gutters {
            margin-right: 0;
            margin-left: 0;
        }
        .align-items-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important;
        }
        .no-margin-bottom *:last-child {
            margin-bottom: 0;
        }
        .types div:last-child {
            margin-bottom: 0 !important;
            border: 0 !important;
        }   
        a.arrow-right {
            color: #bc560b;
            border-color: #bc560b;
        }
        a.arrow-right {
            display: inline-block;
            background-image: url({{url("module/images/arrow.svg")}});
            background-repeat: no-repeat;
            background-position: right 7px;
            padding-right: 2.5rem;
            font-weight: 600;
            font-size: 18px;
            padding-bottom: .5rem;
            border-bottom: solid 2px #f47820;
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
        }
        
        
        .pt-6, .py-6 {
            padding-top: 4rem !important;
        }
        .pb-5, .py-5 {
            padding-bottom: 3rem !important;
        }
        
        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }
        .mt-3, .my-3 {
            margin-top: 1rem !important;
        }
        @media (min-width: 768px){
            .mt-md-0, .my-md-0 {
                margin-top: 0 !important;
            }
            .pt-md-4, .py-md-4 {
                padding-top: 1.5rem !important;
            }
            
            .h-md-100 {
                height: 100% !important;
            }
        }
        .text-center {
            text-align: center !important;
        }
        .pl-4, .px-4 {
            padding-left: 1.5rem !important;
        }
        .pb-4, .py-4 {
            padding-bottom: 1.5rem !important;
        }
        .pr-4, .px-4 {
            padding-right: 1.5rem !important;
        }
        .pt-4, .py-4 {
            padding-top: 1.5rem !important;
        }
        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .border-success {
            border-color: #007db3 !important;
        }
        .border {
            border: 1px solid #dee2e6 !important;
        }
        .blurb svg {
            height: 60px;
            width: auto;
            -o-object-fit: contain;
            object-fit: contain;
        }
        svg {
            overflow: hidden;
            vertical-align: middle;
        }
        .font-size-18 {
            font-size: 18px;
        }
        .pb-md-4, .py-md-4 {
            padding-bottom: 1.5rem !important;
        }
        .blurb h4 {
            color: #000;
            font-family: proxima-nova,sans-serif;
        }
        .mb-3, .my-3 {
            margin-bottom: 1rem !important;
        }
        .blurb ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .mt-auto, .my-auto {
            margin-top: auto !important;
        }  
        .mb-2, .my-2 {
            margin-bottom: .5rem !important;
        }
        .bg-secondary {
            background-color: #133d8d !important;
            margin-top: 30px;
        }
        .text-white {
            color: #fff !important;
        }
        .pb-2, .py-2 {
            padding-bottom: .5rem !important;
        }
        .pt-2, .py-2 {
            padding-top: .5rem !important;
        }
        .text-underline {
            text-decoration: underline;
        }
        .padding-20{
            padding: 20px !important;
        }
        .text-dark {
            color: #676767 !important;
            padding-top: 30px;
        }
        .text-dark p{
            line-height: 35px;
        }
        .bg-info{
            background-color: {{$caseswefundtype->background_forecolor}};
        }
        .pt-10{
            padding-top: 6rem;
        }
        .font-size-20{
            font-size: 20px;
        }
    </style>
@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$typeoffundpage->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$typeoffundpage->title}}</h3>
        </div>
    </section>
    <section class="section-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <p style="padding: 0 80px 80px 80px;">{{$typeoffundpage->page_top_short_detail}}</p>
                    </div>
                </div>
            </div>
        </div>
        @isset($caseswefundtype)
        @if ($caseswefundtype->module_status=="Active")
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 py-5 bg-info">
                        <div class="row justify-content-center">
                            <div class="col-md-10 left-block" style=" margin-bottom: 60px;">
                                <h2 class="h2 separator-left wow animated" style="visibility: visible;">{{$caseswefundtype->title}}</h2>
                                <p>{!!$caseswefundtype->detail!!}</p>
                                    <div class="border-bottom border-white d-flex align-items-center py-3 feat">
                                        <div class="d-inline-block">
                                            <img style="width: 32px; height: 36px;" src="{{url('upload/typesoffundingpresettlement/'.$caseswefundtype->icon_image_one)}}" class="attachment-team size-team wp-post-image" alt=" {{$caseswefundtype->icon_one_heading}}"> 
                                
                                            </div> 
                                             {{$caseswefundtype->icon_one_heading}}
                                            </div>
                                            <div class="border-bottom border-white d-flex align-items-center py-3 feat">
                                                <div class="d-inline-block"> 
                                                    <img style="width: 32px; height: 36px;" src="{{url('upload/typesoffundingpresettlement/'.$caseswefundtype->icon_image_two)}}" class="attachment-team size-team wp-post-image" alt=" {{$caseswefundtype->icon_two_heading}}"> 
                                                </div> 
                                                {{$caseswefundtype->icon_two_heading}}</div>
                                                <div class="border-bottom border-white d-flex align-items-center py-3 feat">
                                                    <div class="d-inline-block"> 
                                                        <img style="width: 32px; height: 36px;" src="{{url('upload/typesoffundingpresettlement/'.$caseswefundtype->icon_image_three)}}" class="attachment-team size-team wp-post-image" alt=" {{$caseswefundtype->icon_three_heading}}">  
                                               
                                                </div> {{$caseswefundtype->icon_three_heading}}</div> 
                                                {{-- <a href="/apply-now/" class="btn btn-primary mt-4">Apply Now</a> --}}
                                                <a href="{{$caseswefundtype->button_url}}" class="btn simple-btn mt-4">{{$caseswefundtype->button_text}} <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                                            </div>
                                        </div>
                        
                    </div>
                    <div class="col-lg-5 pt-6 py-md-6 bg-white types px-md-4">
                        <div class="row justify-content-center">
                        <div class="col-md-11">
                            @foreach ($FundingForm as $item)
                                <div class="row border-bottom border-gray no-margin-bottom font-size-16 no-gutters align-items-center pb-5 mb-4 pb-md-5 mb-md-5">
                                    <div class="col-md-7">
                                        <h4 class="font-size-18">{{$item->title}}</h4>
                                        <p>{!!$item->detail!!}</p>
                                    </div>
                                    <div class="col-md-5 text-md-center pt-10"> <a href="{{$item->link_url}}" class="arrow-right font-size-16 mt-3 mt-md-0"> {{$item->link_text}} </a></div>
                                </div>
                            @endforeach
                            
                            
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @endisset
    </section>
    <section class="services-area-two" style="padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center">{{$CasesWeFundType->title}}</h1>
                        <p>{!!$CasesWeFundType->detail!!}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
                @isset($HelpOnManyCaseTypes)
                    @foreach ($HelpOnManyCaseTypes as $item)
                        <div class="col-md-4 mb-2 pt-md-4">
                            <div class="border border-success text-center h-md-100 px-4 pt-4 pb-4 blurb d-flex flex-column">
                                <div class="mb-4">
                                    <img style="height: 80px;" src="{{url('upload/helponmanycasetypes/'.$item->image)}}" class="attachment-team size-team wp-post-image" alt=" {{$caseswefundtype->icon_one_heading}}">
                                </div>
                                <div class="font-size-18 pb-3 pb-md-4">
                                    <h4 class="mb-3 font-size-20">{{$item->title}}</h4>
                                    <ul>
                                        @if ($item->detail != "")
                                        @foreach(explode(',', $item->detail) as $info) 
                                            <li>{{$info}}</li>   
                                        @endforeach
                                    @endif
                                        
                                    </ul>
                                </div>
                                <div class="text-center mt-auto mb-2"> <a href="{{ url('faq') }}" class="arrow-right"> Learn More </a></div>
                            </div>
                        </div> 
                    @endforeach
                @endisset
             </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a class="btn btn-default simple-btn" title="{{$CasesWeFundType->button_text}}" href="{{$CasesWeFundType->button_url}}"><i class="fa fa-file-text-o" aria-hidden="true"></i> {{$CasesWeFundType->button_text}}</a>
                </div>  
            </div>
        </div>
        <div class="bg-secondary text-white">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 text-center font-size-18 no-margin-bottom py-2 padding-20">
                  <p>{!!$typeoffundpage->page_bottom_notification!!}</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container py-md-5 py-4">
            <div class="row justify-content-center">
               <div class="col-md-11 text-center  text-dark">
                {!!$typeoffundpage->page_bottom_detail!!}
               </div>
            </div>
         </div>
    </section>
@endsection
@section('js')
    
@endsection