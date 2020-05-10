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
    }
</style>
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
            asdasdasd  
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
<section class="team-inner-area" style="padding: 0px;">
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
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-financial-and-key-health-team-up-with-los-angeles-trial-lawyers-charities/" class="d-block mediaLink py-4 py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/Videos-Copy.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Financial and Key Health team up with Los Angeles Trial Lawyers Charities </span> </a></div>
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-partners-with-nonprofit-arc-to-increase-consumer-financial-wellness/" class="d-block mediaLink py-4 py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/ARC-LOGO-PNG.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Partners with Nonprofit ARC to Increase Consumer Financial Wellness </span> </a></div>
            <div class="col-md-4 px-4 text-center"> <a href="https://www.oasisfinancial.com/oasis-receives-bbb-a-certification/" class="d-block mediaLink py-4 py-md-0"> <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/01/BBB-A-rating-1.png" class="d-block ml-auto mr-auto img-fluid rounded mb-4" alt="Oasis media" style="height:90px; width:auto;"> <span class="font-size-24 font-weight-bold d-block"> Oasis Receives BBB A+ Certification </span> </a></div>
         </div>
    </div>
    
</section>
@endsection
@section('js')
    
@endsection