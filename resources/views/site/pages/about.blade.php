@extends('site.layout.master')
@section('title','About')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/aboutpagesetting/'.$AboutPageSetting->background_image)}}");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .serviceHoberBox{
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }

    .serviceHoberBox:hover {
       -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    .color_or{
        color: #FF741A;
    }
    .no-gutters>.col, .no-gutters>[class*=col-] {
        padding-right: 0;
        padding-left: 0;
    }

    .font-size-28 {
        font-size: 28px;
    }
    .font-weight-bold {
        font-weight: 700 !important;
    }
    @media (min-width: 768px){
        .pr-md-5, .px-md-5 {
            padding-right: 3rem !important;
        }
        .pl-md-0, .px-md-0 {
            padding-left: 0 !important;
        }
        .pr-md-0, .px-md-0 {
            padding-right: 0 !important;
        }
        .mb-md-7, .my-md-7 {
            margin-bottom: 5rem !important;
        }
        .valuesImg {
            margin-top: -3rem;
            -o-object-fit: none;
            object-fit: none;
            height: auto;
        }
        .mt-md-n {
            margin-top: -3rem;
        }
        .pt-md-8, .py-md-8 {
            padding-top: 8rem !important;
        }
        .pb-md-7, .py-md-7 {
            padding-bottom: 5rem !important;
        }
        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .d-md-none {
            display: none !important;
        }
    }
    .pb-5, .py-5 {
        padding-bottom: 3rem !important;
    }
    .pt-5, .py-5 {
        padding-top: 3rem !important;
    }
    .pl-2, .px-2 {
        padding-left: .5rem !important;
    }
    .pr-2, .px-2 {
        padding-right: .5rem !important;
    }
    .mb-4, .my-4 {
        margin-bottom: 1.5rem !important;
    }
    .shadow {
        -webkit-box-shadow: 0 .5rem 1rem rgba(0,0,0,.35) !important;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.35) !important;
    }
    .pl-4, .px-4 {
        padding-left: 1.5rem !important;
    }
    .pr-4, .px-4 {
        padding-right: 1.5rem !important;
    }
    .pb-3, .py-3 {
        padding-bottom: 1rem !important;
    }
    .pr-3, .px-3 {
        padding-right: 1rem !important;
    }
    .pt-3, .py-3 {
        padding-top: 1rem !important;
    }
    .position-relative {
        position: relative !important;
    }
    .bg-white {
        background-color: #fff !important;
    }
    ul.values {
        padding: 0;
        list-style: none;
        margin-bottom: 0;
    }
    .font-size-16 {
        font-size: 16px;
    }
    ul.values li {
        border-width: 2px !important;
        padding: 1.2rem 0 1.2rem 1.5rem;
        font-weight: 600;
        background-image: url({{url('module/images/bullet.svg')}});
        background-position: 0 center;
        background-repeat: no-repeat;
    }
    ul.values li:last-child {
        border: 0 !important;
    }
    .border-light {
        border-color: #f5f5f5 !important;
    }
    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important;
    }
    
    .valuesImg {
        height: 300px;
        margin-top: -2rem;
        -o-object-fit: cover;
        object-fit: cover;
    }
    .position-relative {
        position: relative !important;
    }
    .d-block {
        display: block !important;
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
    .stlDiv{
        padding-top: 80px;
        line-height: 35px;
        color: #000;
    }
    .bg-light {
        background-color: #f5f5f5 !important;
    }
    .miles .row {
        margin-top: 20px;
    }
    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }
    .line-height-28 {
        line-height: 28px;
    }
    .font-size-18 {
        font-size: 18px;
    }
    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important;
    }
    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .pl-3, .px-3 {
        padding-left: 1rem !important;
    }
    .pr-3, .px-3 {
        padding-right: 1rem !important;
    }
    .w-50 {
        width: 50% !important;
    }
    .m-auto {
        margin: auto !important;
    }
    .text-con p{
        line-height:30px;
        padding-bottom:15px;
    }
    .d-flex img{
        padding-bottom:30px
    }
    .leaders {
        background-position: right center;
        background-size: auto 100%;
        background-repeat: no-repeat;
    }

    .bg-secondary {
        background-color: #133d8d !important;
    }
    .team-full {
        padding: 130px 0;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-color: #133d8d;
    }
    .mb-5, .my-5 {
        margin-bottom: 3rem !important;
    }
    .team-full .team-left {
        background: #fff;
        border-radius: 5px;
        padding: 25px;
    }
    .ml-auto, .mx-auto {
        margin-left: auto !important;
    }
    .mr-auto, .mx-auto {
        margin-right: auto !important;
    }
    .rounded {
        border-radius: 5px !important;
    }
    .mediaLink {
        color: #212529;
        -webkit-transition: all linear .15s;
        transition: all linear .15s;
    }
    .justify-content-center span{
        width: 200px;
        margin-left: auto;
        text-align: center;
        margin-right: auto;
        padding-bottom: 20px;
    }
    .d-none {
        display: none !important;
    }
    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }
    .leaders .nav-pills .nav-link {
        color: #fff;
    }
    .nav-pills .nav-link {
        border-radius: 5px;
    }
    .nav-link {
        display: block;
        padding: 15px 1rem;
    }
    .nav-link {
        display: block;
        padding: .5rem 1rem;
    }
    .tab-content>.tab-pane {
        display: none;
    }
    .fade:not(.show) {
        opacity: 0;
    }
    @media screen and (prefers-reduced-motion: reduce){
        .fade {
            -webkit-transition: none;
            transition: none;
        }
        .btn, .gform_wrapper .button {
            -webkit-transition: none;
            transition: none;
        }
    }
    .fade {
        -webkit-transition: opacity .15s linear;
        transition: opacity .15s linear;
    }
    .tab-content>.active {
        display: block;
    }
    .tab-content>.tab-pane {
        display: none;
    }
    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%;
    }
    .accordion .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .border-0 {
        border: 0 !important;
    }
    .bg-transparent {
        background-color: transparent !important;
    }
    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 5px;
    }
    .card-header:first-child {
        border-radius: calc(5px - 1px) calc(5px - 1px) 0 0;
    }
    .p-0 {
        padding: 0 !important;
    }
    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0,0,0,.03);
        border-bottom: 1px solid rgba(0,0,0,.125);
    }
    .mb-0, .my-0 {
        margin-bottom: 0 !important;
    }
    .leaders button {
        color: #fff;
        background-image: url('{{asset('module/images/extra/down.svg')}}');
        background-position: 95% 1.8rem;
        background-repeat: no-repeat;
        border-bottom: solid 1px #fff;
    }
    .font-family-sans-serif {
        font-family: proxima-nova,sans-serif;
    }
    .text-left {
        text-align: left !important;
    }
    .w-100 {
        width: 100% !important;
    }
    .btn-link {
        font-weight: 400;
        color: #f47820;
        background-color: transparent;
    }
    .gform_wrapper .button {
        display: inline-block;
        font-weight: 400;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        border: 1px solid transparent;
        padding: .375rem 2rem;
        font-size: 1.25rem;
        line-height: 1.35;
        border-radius: 0;
        -webkit-transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out;
    }
    .pt-2, .py-2 {
        padding-top: .5rem !important;
    }
    .font-weight-semibold {
        font-weight: 600;
    }
    #myTabContent img {
        float: left;
        height: 150px;
        margin: 0 20px 20px 0;
        width: auto;
        object-fit: cover;
        border-radius: 5px;
    }
    #myTabContent .border-success {
        clear: left;
    }
    .no-margin-bottom *:last-child {
        margin-bottom: 0;
    }
    .leaders strong {
        color: #FF741A;
    }
    .font-size-16 {
        font-size: 16px;
    }
    .pl-3, .px-3 {
        padding-left: 1rem !important;
    }
    .border-success {
        border-color: #FF741A !important;
    }
    .border-left {
        border-left: 1px solid #dee2e6 !important;
    }
    .leaders .border-success ul {
        /* margin-top: -15px; */
    }
    .leaders .nav-pills .nav-link.active, .leaders .nav-pills .show>.nav-link {
        background-color: #fff;
        color: #f47820;
        background-image: url('{{asset('module/images/extra/arrow.svg')}}');
        background-repeat: no-repeat;
        background-position: 1rem center;
        padding-left: 4rem;
    }
    .leaders .nav-pills .nav-link {
        color: #fff;
    }
    .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
        color: #fff;
        background-color: #f47820;
    }
    .nav-pills .nav-link {
        border-radius: 5px;
    }
    .nav-link {
        display: block;
        padding: 15px 1rem;
    }
    .leaders .border-success ul {
        margin-left: 15px;
    }
    .leaders .border-success ul li {
        list-style: square;
    }

    .nav-link:hover{
        background: none;
        opacity: 1;
    }

    .nav-item:hover{
        background: none;
        opacity: 1;
    }

    @media only screen and (max-width:995px) {
    .miles img {
        margin-top: 30px !important;
        margin-bottom: 30px !important
    }
    }

    .team-full {
        padding: 130px 0;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat;
        background-color: #FF741A
    }

    .team-full .team-left {
        background: #fff;
        border-radius: 5px;
        padding: 25px
    }

    .team-wrapper img {
        width: 100%;
        height: 250px;
        object-fit: cover;
        padding: 5px;
        border: 5px solid #FF741A
    }

    .team-wrapper .single-team {
        background-size: cover;
        background-position: center center;
        background-repeat;
        no-repeat;
        margin: 15px 0;
        height: 250px;
        padding: 50px 20px 20px;
        text-align: center;
        position: relative;
        z-index: 0
    }

    .team-wrapper .single-team .team-content {
        opacity: 0;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        color: #fff;
        z-index: 1
    }

    .team-wrapper .single-team:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #FF741A;
        opacity: 0;
        -webkit-transition: all .3s ease-in-out;
        -moz-transition: all .3s ease-in-out;
        -o-transition: all .3s ease-in-out;
        -ms-transition: all .3s ease-in-out;
        transition: all .3s ease-in-out;
        z-index: -1
    }

    .team-wrapper .single-team:hover .team-content {
        opacity: 1
    }

    .team-wrapper .single-team .team-content p {
        font-size: 14px;
        line-height: 20px;
        font-weight: 300;
        font-family: "Usual", sans-serif
    }

    .team-wrapper .single-team .team-content .team-name {
        display: block;
        font-family: "Sofia Pro", sans-serif;
        text-transform: uppercase;
        font-size: 20px;
        line-height: 26px;
        font-weight: 700;
        padding-bottom: 16px;
        margin-bottom: 16px;
        position: relative
    }

    .team-wrapper .single-team .team-content .team-name:after {
        content: '';
        position: absolute;
        bottom: 0;
        height: 2px;
        width: 69px;
        background: #FF741A;
        left: 50%;
        transform: translateX(-50%)
    }

    .data-pull-overlay::after{
        background: #FF741A;
        position: absolute;
        display: block;
    }

    .team-wrapper .single-team:hover:after {
        opacity: .8
    }

    @media (max-width:767px) {
        .team-wrapper .single-team {
            margin: 1.5px 0
        }
        .team-wrapper .single-team:after {
            opacity: .8
        }
        .team-wrapper .single-team .team-content {
            opacity: 1
        }
        .team-full {
            background-position: top center;
            background-size: 100%;
            padding: 160px 0 30px
        }
    }


    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important;
    }

    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important;
    }

    .d-lg-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
    }
    .d-flex img{
        width: 120px;
    }

</style>
@endsection
@section('content')
<!-- Inner Page title Start -->
<section class="innerpage-titlebar" style="--my-innerpage-titlebar-color:{{$AboutPageSetting->background_forecolor}}">
        <div class="container">
            <h3 class="fix-barcum-head">{{$AboutPageSetting->section_title}}</h3>
        </div>
    </section>
<section class="services-area-two" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">{{$AboutPageSetting->page_heading_title}}</h1>
                    <p>{!!$AboutPageSetting->page_sub_heading!!}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-area-two" style="padding-top: 0px;">
    @isset($AboutMilestones)
        @if ($AboutMilestones->module_status=="Active")
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="padding-left:120px;">
                        <div class="col-md-5 font-size-28 font-weight-bold pr-md-5">
                            <div class="mb-4 mb-md-7 px-2 px-md-0 stlDiv"> {!!$AboutPageSetting->page_short_content!!}</div>
                        </div>
                        <div class="col-md-4 pl-4 pr-3 py-3 bg-white shadow position-relative" style="z-index: 2">
                            <ul class="values font-size-16">
                                @if ($AboutPageSetting->page_options != "")
                                        @foreach(explode(',', $AboutPageSetting->page_options) as $info) 
                                            <li class="border-bottom border-light"> {{$info}}</li>
                                        @endforeach
                                    @endif
                            
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-10 px-0 px-md-3"  style="padding-left:120px;"> 
                        <img src="{{asset('upload/aboutpagesetting/'.$AboutPageSetting->page_options_image)}}" alt="Oasis Values" class="d-block valuesImg position-relative img-fluid" style="z-index: 1;">
                    </div>
                </div> 
            </div>
        @endif
    @endisset
    
    @if($AboutMilestones->module_status=="Active")
    <div class="bg-light pt-5 pb-5 pt-md-8 pb-md-7 mt-md-n miles">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-12 pr-md- font-size-18 line-height-28">
                    <h2 class="h3 font-size-28 font-weight-bold separator-left ">{{$AboutMilestones->title}}</h2>
                </div>
                <div class="col-md-6 text-con">
                    <p>{!!$AboutMilestones->detail!!}</p>
                </div>
                <div class="col-md-6">
                    <div class=" d-flex justify-content-center align-iems-center flex-wrap  px-4">
                        <div class="w-50 px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_one)}}" alt="Key" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_two)}}" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_three)}}" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_four)}}" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_five)}}" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="#" target="_blank"> <img src="{{asset('upload/aboutmilestones/'.$AboutMilestones->image_six)}}" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    @endif
    @isset($MeetLeaderSetting)
        @if ($MeetLeaderSetting->module_status=="Active")
            <div class="data-pull-overlay leaders" style="background-image: url({{asset('upload/meetleadersetting/'.$MeetLeaderSetting->background_image)}}); background-color:{{$MeetLeaderSetting->background_forecolor}};">
                <div class="container pt-5 pb-4 pt-md-5 pb-md-6">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h2 class="separator-center h3 text-white wow animated" style="visibility: visible;">{{$MeetLeaderSetting->title}}</h2>
                        </div>
                    </div>
                    <div class="row justify-content-center d-md-flex">
                        @isset($TeamMember)
                        <div class="col-md-5 pr-md-5">
                            <ul class="nav flex-column nav-pills data-pills-init" id="myTab" role="tablist">
                                @foreach ($TeamMember as $key=>$item)
                                    @if ($key==0)
                                        <li class="nav-item"> <a class="nav-link data-team-member active show" id="leaders{{$key}}-tab" data-toggle="tab" href="#leaders{{$key}}" role="tab" aria-controls="leaders{{$key}}" aria-selected="false"> <span class="font-weight-semibold">{{$item->member_name}}</span> | <span class="font-size-14">{{$item->member_designation}}</span></a></li>
                                    @else
                                        <li class="nav-item"> <a class="nav-link data-team-member" id="leaders{{$key}}-tab" data-toggle="tab" href="#leaders{{$key}}" role="tab" aria-controls="leaders{{$key}}" aria-selected="false"> <span class="font-weight-semibold">{{$item->member_name}}</span> | <span class="font-size-14">{{$item->member_designation}}</span></a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        @endisset

                        @isset($TeamMember)
                        <div class="col-md-5">
                            <div class="tab-content bg-white rounded px-4 py-4" id="myTabContent">
                                @foreach ($TeamMember as $key=>$item)
                                    @if ($key==0)
                                        <div class="tab-pane data-team-member-pane fade active show" id="leaders{{$key}}" role="tabpanel" aria-labelledby="leaders{{$key}}-tab">
                                            <img src="{{asset('upload/teammember/'.$item->member_image)}}" alt="{{$item->member_name}}">
                                            <p class="font-weight-semibold mb-4">{{$item->member_responsible}}</p>
                                            <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                                                @if (count(json_decode($item->relevant_experience))>0)
                                                <p><strong>Relevant Experience</strong></p>
                                                    <ul>
                                                        @foreach (json_decode($item->relevant_experience) as $ri)
                                                            <li>{{$ri}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <hr>
                                                @if (count(json_decode($item->education))>0)
                                                <p><strong>Education</strong></p>
                                                    <ul>
                                                        @foreach (json_decode($item->education) as $ri)
                                                            <li>{{$ri}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- <p><strong>Education</strong></p>
                                                <ul>
                                                    <li>B.S. Accountancy, Northern Illinois University</li>
                                                    <li>M.B.A., Northern Illinois University College of Business</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    @else
                                        <div class="tab-pane data-team-member-pane fade" id="leaders{{$key}}" role="tabpanel" aria-labelledby="leaders{{$key}}-tab">
                                            <img src="{{asset('upload/teammember/'.$item->member_image)}}" alt="{{$item->member_name}}">
                                            <p class="font-weight-semibold mb-4">{{$item->member_responsible}}</p>
                                            <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                                                @if (count(json_decode($item->relevant_experience))>0)
                                                <p><strong>Relevant Experience</strong></p>
                                                    <ul>
                                                        @foreach (json_decode($item->relevant_experience) as $ri)
                                                            <li>{{$ri}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                <hr>
                                                @if (count(json_decode($item->education))>0)
                                                <p><strong>Education</strong></p>
                                                    <ul>
                                                        @foreach (json_decode($item->education) as $ri)
                                                            <li>{{$ri}}</li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                                {{-- <p><strong>Education</strong></p>
                                                <ul>
                                                    <li>B.S. Accountancy, Northern Illinois University</li>
                                                    <li>M.B.A., Northern Illinois University College of Business</li>
                                                </ul> --}}
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @endisset
                    </div>  
                </div>
            </div>
        @endif
    @endisset
    
</section>

@isset($AboutMeetOurTeam)
    @if ($AboutMeetOurTeam->module_status=="Active")  
        <section class="team-inner-area" style="padding: 0px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="about-col text-center">
                            <h1 id="getstarted" class="separator-center">{{$AboutMeetOurTeam->title}}</h1>
                            <p>{!!$AboutMeetOurTeam->detail!!}</p>
                        </div>
                    </div>
                </div>
                
                
                <div class="row team-wrapper">
                    {{-- @isset($AboutMeetOurTeamMember)
                        @if ($AboutMeetOurTeamMember->module_status=="Active") --}}
                            @foreach ($AboutMeetOurTeamMember as $item)
                                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                                    @if ($item->image_with_border=="Disable")
                                        <div class="single-team" style="background-image: url('{{asset('upload/aboutmeetourteammember/'.$item->team_image)}}');">
                                            <div class="team-content"> 
                                                <span class="team-name">{{$item->title}}</span>
                                                <p>{!!$item->detail!!}</p>
                                            </div>
                                        </div>
                                    @else
                                        <img style="padding: 5px 5px 5px; margin: 15px 0;" src="{{asset('upload/aboutmeetourteammember/'.$item->team_image)}}">
                                    @endif
                                    
                                </div>
                            @endforeach
                        {{-- @endif
                    @endisset --}}
                    
                    
                </div>
            </div>
        </section>
    @endif
@endisset

@isset($record)
    
@endisset


@isset($AboutWorkAtAdvantageLending)
@if ($AboutWorkAtAdvantageLending->module_status=="Active")
<section class="team-inner-area" style="padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">{{$AboutWorkAtAdvantageLending->title}}</h1>
                    <p>{{$AboutWorkAtAdvantageLending->detail}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-full mb-5" style="background-image:url('{{asset('upload/aboutworkatadvantagelending/'.$AboutWorkAtAdvantageLending->section_image)}}');">
        <div class="container">
           <div class="row">
              <div class="col-lg-5 col-md-6">
                 <div class="team-left">
                    <p>{{$AboutWorkAtAdvantageLending->image_popup_content}}</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
</section>    
@endif

@endisset
<section class="team-inner-area" style="padding: 0px; margin-bottom:20px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">Media</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-left: 100px;">
            
            <div class="col-md-4 px-4 text-center"> 
                <a href="#" class="d-block mediaLink py-md-0"> 
                    <img src="{{asset('module/images/extra/Videos-Copy.png')}}" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Financial and Key Health team up with Los Angeles Trial Lawyers Charities </span> </a></div>
            <div class="col-md-4 px-4 text-center"> 
                <a href="#" class="d-block mediaLink py-md-0"> 
                    <img src="{{asset('module/images/extra/ARC-LOGO-PNG.png')}}" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> 
                Oasis Partners with Nonprofit ARC to Increase Consumer Financial Wellness </span> </a></div>
            <div class="col-md-4 px-4 text-center"> <a href="#" class="d-block mediaLink py-md-0"> 
                <img src="{{asset('module/images/extra/BBB-A-rating-1.png')}}" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Receives BBB A+ Certification </span> </a></div>
         </div>
         <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="{{url('contact-us')}}" class="btn btn-danger simple-btn"> Media inquiries: Contact Us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>   
                
            </div>
    </div>
    
</section>


@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function(){
            //nav-link data-team-member active show

            
            //$('.data-pills-init').children('li:eq(0)').addClass('show');
            //$('.data-pills-init').children('li:eq(0)').attr('aria-selected','true');

            $('.data-team-member').click(function(){
                console.log('Click Initiated');
                $.each($('.data-team-member'),function(key,row){
                    $(row).attr('class','nav-link data-team-member');
                    $(row).attr('aria-selected','false');
                });

                $(this).addClass('active');
                $(this).addClass('show');
                $(this).attr('aria-selected','true');

                $.each($('.data-team-member-pane'),function(key,row){
                    $(row).attr('class','tab-pane data-team-member-pane fade');
                });

                var panelID=$(this).attr('href');
                $(panelID).addClass('active');
                $(panelID).addClass('show');
            });


            $('#leaders0-tab').trigger('click');
        });
    </script>
@endsection