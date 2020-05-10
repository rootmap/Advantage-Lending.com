@extends('site.layout.master')
@section('title','About')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url('{{asset('module/images/extra/What-can-I-do-for-you_-590052924_6248x4912.jpeg')}}');
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
        background-image: url(//www.oasisfinancial.com/wp-content/themes/oasis/img/down.svg);
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
    .btn, .gform_wrapper .button {
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
        color: #007db3;
    }
    .font-size-16 {
        font-size: 16px;
    }
    .pl-3, .px-3 {
        padding-left: 1rem !important;
    }
    .border-success {
        border-color: #007db3 !important;
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
        background-image: url(//www.oasisfinancial.com/wp-content/themes/oasis/img/arrow.svg);
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
</style>
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="{{asset('module/lity/dist/lity.css')}}" rel="stylesheet">
@endsection
@section('content')
<!-- Inner Page title Start -->
<section class="innerpage-titlebar">
    <div class="container">
        <h3 class="fix-barcum-head">About Oasis</h3>
    </div>
</section>
<section class="services-area-two" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">Legal Funding You Can Trust</h1>
                    <p>Oasis was founded in 2003 by attorneys who saw a specific need among several of their clients. These clients were burdened with increasing medical bills and living expenses, but their cases weren’t settling fast enough to make payments. The attorneys launched Oasis to provide a way for plaintiffs to receive <a class="color_or" href="">pre-settlement funding</a> and make life livable until their case closed.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-area-two" style="padding-top: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding-left:120px;">
                <div class="col-md-5 font-size-28 font-weight-bold pr-md-5">
                    <div class="mb-4 mb-md-7 px-2 px-md-0 stlDiv"> Our founders established a philosophy and values that guide our business every day.</div>
                </div>
                <div class="col-md-4 pl-4 pr-3 py-3 bg-white shadow position-relative" style="z-index: 2">
                    <ul class="values font-size-16">
                        <li class="border-bottom border-light"> Help people in difficult circumstances regain some control and prevent disaster.</li>
                        <li class="border-bottom border-light"> Be responsible and transparent so customers can make informed choices.</li>
                        <li class="border-bottom border-light"> Ensure a dignified customer experience by engaging them with respect and understanding.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 px-0 px-md-3"  style="padding-left:120px;"> 
                <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/Depositphotos_169383864_xl-2015.jpg" alt="Oasis Values" class="d-block valuesImg position-relative img-fluid" style="z-index: 1;">
            </div>
        </div> 
     </div>
     <div class="bg-light pt-5 pb-5 pt-md-8 pb-md-7 mt-md-n miles">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-md-12 pr-md- font-size-18 line-height-28">
                    <h2 class="h3 font-size-28 font-weight-bold separator-left ">Milestones</h2>
                </div>
                <div class="col-md-6 text-con">
                    <p>Today our organization includes <strong>Key Health</strong>, which offers medical lien solutions; and <strong>AccidentMeds</strong>, a pharmacy card program.</p>
                    <p>We are founding partners of <a href="http://arclegalfunding.org/" target="_blank" rel="noopener"><strong>ARC</strong></a>, the Alliance for Responsible Consumer Lending, and <a href="http://www.accessforpatients.org/" target="_blank" rel="noopener"><strong>APA</strong></a>, Americans for Patient Access.</p>
                    <p>We’re proud of our A+ rating from the Better Business Bureau, and our four-star rating from Trustpilot. We’ve been a lifeline for more than 250,000 individuals and families, providing relief during difficult times.</p>
                </div>
                <div class="col-md-6">
                    <div class=" d-flex justify-content-center align-iems-center flex-wrap  px-4">
                        <div class="w-50 px-3"> <a href="https://www.keyhealth.net/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/Key-Health-horizontal-cmyk.png" alt="Key" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="https://www.accidentmeds.com/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/AccidentMeds-horizontal-cmyk.png" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="https://www.accidentmeds.com/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/AccidentMeds-horizontal-cmyk.png" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="https://www.accidentmeds.com/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/AccidentMeds-horizontal-cmyk.png" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="https://www.accidentmeds.com/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/AccidentMeds-horizontal-cmyk.png" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                        <div class="w-50  px-3"> <a href="https://www.accidentmeds.com/" target="_blank"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/03/AccidentMeds-horizontal-cmyk.png" alt="AcciedentMeds" class="img-fluid d-block m-auto"> </a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <div class="bg-secondary leaders" style="background-image: url(https://www.oasisfinancial.com/wp-content/uploads/2019/01/Depositphotos_211232802_xl-2015.jpg);">
        <div class="container pt-5 pb-4 pt-md-5 pb-md-6">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="separator-center h3 text-white wow animated" style="visibility: visible;">Meet Our Leaders</h2>
                </div>
            </div>
            <div class="row justify-content-center d-md-flex">
                <div class="col-md-5 pr-md-5">
                   <ul class="nav flex-column nav-pills data-pills-init" id="myTab" role="tablist">
                      <li class="nav-item"> <a class="nav-link data-team-member active show" id="leaders1-tab" data-toggle="tab" href="#leaders1" role="tab" aria-controls="leaders1" aria-selected="false"> <span class="font-weight-semibold"> Greg Zeeman</span> | <span class="font-size-14"> Chief Executive Officer</span></a></li>
                      <li class="nav-item"> <a class="nav-link data-team-member" id="leaders2-tab" data-toggle="tab" href="#leaders2" role="tab" aria-controls="leaders2" aria-selected="false"> <span class="font-weight-semibold"> Robert Gallagher</span> | <span class="font-size-14"> Chief Financial Officer</span></a></li>
                      <li class="nav-item"> <a class="nav-link data-team-member" id="leaders3-tab" data-toggle="tab" href="#leaders3" role="tab" aria-controls="leaders3" aria-selected="false"> <span class="font-weight-semibold"> Griffin Gordon</span> | <span class="font-size-14"> Chief Operating Officer</span></a></li>
                      <li class="nav-item"> <a class="nav-link data-team-member" id="leaders4-tab" data-toggle="tab" href="#leaders4" role="tab" aria-controls="leaders4" aria-selected="true"> <span class="font-weight-semibold"> Mohammed Hanif</span> | <span class="font-size-14"> Chief Information Officer</span></a></li>
                      <li class="nav-item"> <a class="nav-link data-team-member" id="leaders5-tab" data-toggle="tab" href="#leaders5" role="tab" aria-controls="leaders5" aria-selected="false"> <span class="font-weight-semibold"> Jeff Trigilio</span> | <span class="font-size-14"> Head of Medical Lien, CEO of Key Health</span></a></li>
                      <li class="nav-item"> <a class="nav-link data-team-member" id="leaders6-tab" data-toggle="tab" href="#leaders6" role="tab" aria-controls="leaders6" aria-selected="false"> <span class="font-weight-semibold"> Phil Greenberg</span> | <span class="font-size-14"> General Counsel</span></a></li>
                   </ul>
                </div>
                <div class="col-md-5">
                   <div class="tab-content bg-white rounded px-4 py-4" id="myTabContent">
                      <div class="tab-pane data-team-member-pane fade active show" id="leaders1" role="tabpanel" aria-labelledby="leaders1-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/Greg-Z.jpg" alt="Greg Z">
                         <p class="font-weight-semibold mb-4"> Responsible for Mission, Vision and Growth</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p><strong>Relevant Experience</strong></p>
                            <ul>
                               <li>20+ years of leadership experience in consumer lending, specialty finance organizations including serving as COO for Enova International and COO for HSBC USA</li>
                               <li>Former CEO for Main Street Renewal, a leading privately held multi-market single family real estate rental company</li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.A. Economics and Political Science, University of North Carolina</li>
                               <li>M.B.A., Harvard Business School</li>
                            </ul>
                         </div>
                      </div>
                      <div class="tab-pane data-team-member-pane fade" id="leaders2" role="tabpanel" aria-labelledby="leaders2-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/Bob-G.jpg" alt="Bob G">
                         <p class="font-weight-semibold mb-4"> Responsible for Finance, Marketing, Human Resources and Facilities</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p><strong>Relevant Experience</strong></p>
                            <ul>
                               <li>CFO of Cars.com/Classified Ventures for 12 years</li>
                               <li><span class="s1">20+ years experience in high-tech businesses</span></li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.S. Accountancy, Northern Illinois University</li>
                               <li>M.B.A., Northern Illinois University College of Business</li>
                            </ul>
                         </div>
                      </div>
                      <div class="tab-pane data-team-member-pane fade" id="leaders3" role="tabpanel" aria-labelledby="leaders3-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/Griffin-G.jpg" alt="Griffin G">
                         <p class="font-weight-semibold mb-4"> Responsible for Operations, Analytics and Business Strategy</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p><strong>Relevant Experience</strong></p>
                            <ul>
                               <li><span class="s1">Led 500+ person business, Performant Recovery, that provides asset recovery services to federal agency, state government and corporate clients</span></li>
                               <li><span class="s1">10+ years of financial services and technology experience as both as an operator and investor</span></li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.A., Dartmouth College</li>
                               <li>M.B.A., University of Chicago Booth School of Business</li>
                            </ul>
                         </div>
                      </div>
                      <div class="tab-pane data-team-member-pane fade " id="leaders4" role="tabpanel" aria-labelledby="leaders4-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/Mohammed-H.jpg" alt="Mohammed H">
                         <p class="font-weight-semibold mb-4"> Responsible for Technology Strategy and Execution</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p class="p1"><strong><span class="s1">Relevant Experience</span></strong></p>
                            <ul>
                               <li class="p1"><span class="s1">Diverse background in a variety of technology roles across several industries</span></li>
                               <li class="p1"><span class="s1">Implemented several multi-million-dollar cost saving initiatives</span></li>
                               <li class="p1"><span class="s1">Implemented multi-country ERP systems</span></li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.S. Computer Engineering, University of Illinois Urbana-Champaign</li>
                               <li>M.B.A., Northwestern University – Kellogg School of Management</li>
                            </ul>
                         </div>
                      </div>
                      <div class="tab-pane data-team-member-pane fade" id="leaders5" role="tabpanel" aria-labelledby="leaders5-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/Jeff-T.jpg" alt="Jeff T">
                         <p class="font-weight-semibold mb-4"> Responsible for Medical Lien Sales</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p class="p1"><strong><span class="s1">Relevant Experience</span></strong></p>
                            <ul>
                               <li class="p1"><span class="s1">Pioneer in developing the medical lien financing industry</span></li>
                               <li class="p1"><span class="s1">40 years running successful businesses in medical financing and medical provider services</span></li>
                               <li class="p1"><span class="s1">Founder of Key Health Group, Inc., the largest medical lien funding company in the U.S.</span></li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.S. Nuclear Medicine, Rochester Institute of Technology</li>
                               <li>Graduate Research, SUNY Buffalo</li>
                            </ul>
                         </div>
                      </div>
                      <div class="tab-pane data-team-member-pane fade" id="leaders6" role="tabpanel" aria-labelledby="leaders6-tab">
                         <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/10/phil-g-684x1024.jpg" alt="Phil G">
                         <p class="font-weight-semibold mb-4"> Responsible for Legal, Regulatory, Business Development and Strategy</p>
                         <div class="font-size-16 border-left border-success pl-3 no-margin-bottom" style="border-width: 2px !important;">
                            <p class="p1"><span class="s1"><strong>Relevant Experience</strong></span></p>
                            <ul>
                               <li class="p1"><span class="s1">Entrepreneur with 10+ years as CEO and founder of a successful plaintiff funding company</span></li>
                               <li class="p1"><span class="s1">Developed a private label mortgage origination product for credit unions</span></li>
                               <li class="p1"><span class="s1">M&amp;A and Structured Finance attorney, most recently with Cadwalader Wickersham &amp; Taft</span></li>
                            </ul>
                            <hr>
                            <p><strong>Education</strong></p>
                            <ul>
                               <li>B.A., SUNY Stony Brook</li>
                               <li>JD, Brooklyn Law School</li>
                            </ul>
                         </div>
                      </div>
                   </div>
                </div>
             </div>  
        </div>
    </div>
</section>

<section class="team-inner-area" style="padding: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">Meet Our Teams</h1>
                    <p>Oasis works for our customers because of the dedicated team that works for Oasis. Below is an overview of the teams and team members that make Oasis great.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/1.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Lan Cooper</a>
                            <small>Manager</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/2.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Ezra Oliva</a>
                            <small>Engineer</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/3.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Jose Easton</a>
                            <small>Engineer</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/4.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Brandon Tyler</a>
                            <small>CEO</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/5.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Xavier Leo</a>
                            <small>Engineer</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/6.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Jason Carson</a>
                            <small>CEO</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/7.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Lio Maria</a>
                            <small>CEO</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 fw60">
                <div class="our-team">
                    <div class="team-pic">
                        <img src="{{ url('module/images/team/8.jpg')}}" alt="">
                    </div>
                    <div class="team-profile">
                        <h3 class="team-title">
                            <a href="team-details.html">Jason Roy</a>
                            <small>CEO</small>
                        </h3>
                        <ul class="team-social">
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-instagram"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <ul class="pagination">
                    <li class="disabled"><a href="#">«</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="team-inner-area" style="padding: 40px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">Work at Oasis</h1>
                    <p>At Oasis Financial, we help victims of accidents recover physically and financially from an injury. We help our customers access medical care and the funds they need to pay bills while waiting for a lawsuit to settle. Team members work directly with individual customers, attorney partners or colleagues at headquarters in a variety of specializations.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="team-full mb-5" style="background-image:url( 'https://www.oasisfinancial.com/wp-content/uploads/2019/11/oasis-team.jpg' );">
        <div class="container">
           <div class="row">
              <div class="col-lg-5 col-md-6">
                 <div class="team-left">
                    <p>If you crave a high energy culture, possess a strong work ethic, and seek rewards that match achievement, review our <a href="http://www.oasisfinancial.com/about-oasis/careers/"><span style="text-decoration: underline;"><strong>open jobs</strong></span></a> and apply today!</p>
                 </div>
              </div>
           </div>
        </div>
     </div>
</section>
<section class="team-inner-area" style="padding: 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="about-col text-center">
                    <h1 id="getstarted" class="separator-center">Media</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center" style="padding-left: 100px;">
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-financial-and-key-health-team-up-with-los-angeles-trial-lawyers-charities/" class="d-block mediaLink py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/Videos-Copy.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Financial and Key Health team up with Los Angeles Trial Lawyers Charities </span> </a></div>
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-partners-with-nonprofit-arc-to-increase-consumer-financial-wellness/" class="d-block mediaLink py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/ARC-LOGO-PNG.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Partners with Nonprofit ARC to Increase Consumer Financial Wellness </span> </a></div>
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-receives-bbb-a-certification/" class="d-block mediaLink py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/BBB-A-rating-1.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Receives BBB A+ Certification </span> </a></div>
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

            window.location.href="#leaders1";

            $('.data-pills-init').children('li:eq(0)').trigger('click');
        });
    </script>
@endsection