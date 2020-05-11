@extends('site.layout.master')
@section('title','For Attorneys')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url('{{asset('module/images/extra/What-can-I-do-for-you_-590052924_6248x4912.jpeg')}}');
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
            margin-bottom: 0;
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
    .bg-light {
        background-color: #f5f5f5 !important;
    }
    .font-size-24 {
        font-size: 24px;
    }
    .font-family-serif {
        font-family: adelle,serif;
    }
    .text-dark {
        color: #676767 !important;
    }
    .text-center {
        text-align: center !important;
    }
    .p-4 {
        padding: 2.5rem !important;
    }
    .mt-4, .my-4 {
        margin-top: 1.5rem !important;
    }
    .negative-margin {
        margin-top: -5rem;
        z-index: 999;
        position: relative;
        background-color: #f5f5f5 !important;
        border-radius: 5px !important;
        padding-bottom: .5rem !important;
    }
    .color_or{
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    .color_blue{
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A !important;
        font-size: 3.5rem;
    }
    h1, h2, h3, h4, h5, h6, .h1, .h2, .h4, .h5, .h6 {
    margin-bottom: .5rem;
    font-weight: 700;
    line-height: 1.2;
    color: #FF741A;
    font-variant: small-caps;
    font-family: initial;
    }
    hr {
        border-width: 3px;
        border-color: #FF741A;
    }
    .wordmark img {
        max-width: 110px;
        margin-bottom: 1rem;
        max-height: 39px;
    }
    a.arrow-right {
        color: #bc560b;
        border-color: #bc560b;
        margin-top: 2rem;
        margin-bottom: 3rem;
    }
    a.arrow-right {
        display: inline-block;
        background-image: url(//www.oasisfinancial.com/wp-content/themes/oasis/img/arrow.svg);
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
    .bg-secondary {
        background-color: #FF741A !important;
    }
    .leaders {
        background-position: right center;
        background-size: auto 100%;
        background-repeat: no-repeat;
    }
        h2, h3, h4, h5, h6, .h2, .h3, .h4, .h5, .h6 {
        text-transform: none !important;
    }

    .text-white {
        color: #fff !important;
    }
    .mb-3, .my-3 {
        margin-bottom: 1rem !important;
    }
    .d-inline-block {
        display: inline-block !important;
    }
    .pl-0, .px-0 {
        padding-left: 0 !important;
    }
    .pr-0, .px-0 {
        padding-right: 0 !important;
    }
    .leaders ul li{
        list-style: square;
        color: #fff;
        margin-left: 35px;
    }
    .h-100 {
        min-height: 270px;
    }
    .blurb h4 {
        color: #000;
        font-family: proxima-nova,sans-serif;
    }
    .font-size-18 {
        font-size: 18px;
    }
    .mb-4, .my-4 {
        margin-bottom: 1.5rem !important;
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
            <h3 class="fix-barcum-head">For Attorneys</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="padding-top:50px;">
                    <div class="about-col">
                        <h2 class="separator-left" style="color: #FF741A; font-weight: bolder; font-size: 34px;">Your Best Case Scenario</h2>
                    </div>
                    <div class="" style="margin-bottom: 1px">
                        <p style="font-size:14px; font-weight: 600;">No one works harder to make it easier for you to help your client recover physically and financially from an accident. Our top-rated pre-settlement funding provides relief during challenging times, and through our acquisition of Key Health, a premier medical lien company, and AccidentMeds, a nationwide prescription card service, Oasis Financial offers the most comprehensive products and services to alleviate burdens.</p>
                    </div>
                    <div class="bg-light p-4 text-center font-size-24 text-dark font-family-serif mt-4">Founded in 2003 by attorneys who saw a specific need, Oasis helps bridge the gap between your client’s current financial struggles and future settlement.</div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="about-col ">
                        <div class="about-image negative-margin">
                            <div>
                                <h1 id="getstarted" class="color_blue h1">Comprehensive Products & Services</h1>
                                <hr style="margin-top: 0; margin-bottom: 30px">
                            </div>
                            <div>
                                <div class="wordmark"> 
                                    <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/06/oasis_TM_logo.png" alt="Oasis Financial" class="d-none d-md-block">
                                    <p>Industry-leading <strong>pre-settlement funding</strong> to cover day-to-day expenses and <a href="/express-cash-for-care/" class="color_or"><strong>Express Cash for Care™</strong></a> to cover medical expenses for providers that won’t accept liens</p>
                                    <p><a class="arrow-right" href="/pre-settlement-funding/" rel="noopener">Learn More</a></p>
                                </div>
                                <div class="wordmark"> 
                                    <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/06/Key-Health-horizontal_white.png" alt="Oasis Financial" class="d-none d-md-block">
                                    <p>Industry-leading <strong>pre-settlement funding</strong> to cover day-to-day expenses and <a href="/express-cash-for-care/" class="color_or"><strong>Express Cash for Care™</strong></a> to cover medical expenses for providers that won’t accept liens</p>
                                    <p><a class="arrow-right" href="/pre-settlement-funding/" rel="noopener">Learn More</a></p>
                                </div>
                                <div class="wordmark"> 
                                    <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/06/AM_logo.png" alt="Oasis Financial" class="d-none d-md-block">
                                    <p>Industry-leading <strong>pre-settlement funding</strong> to cover day-to-day expenses and <a href="/express-cash-for-care/" class="color_or"><strong>Express Cash for Care™</strong></a> to cover medical expenses for providers that won’t accept liens</p>
                                    <p><a class="arrow-right" href="/pre-settlement-funding/" rel="noopener">Learn More</a></p>
                                </div>
                            </div>    
                        </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="bg-secondary leaders" style="background-image: url(http://192.168.0.3/advantage-lending/public/module/images/extra/Depositphotos_211232802_xl-2015.jpg);">
            <div class="container pt-5 pb-4 pt-md-5 pb-md-6">
                <div class="row">
                    <div class="col-md-8 pb-4 pb-md-5">
                        <h2 class="h3 mb-3 d-inline-block text-white">
                            <a href="" target="_blank">
                                <img src="https://www.oasisfinancial.com/wp-content/uploads/2019/07/Asset-1.png" alt="Oasis Attorney Portal">
                            </a>
                        </h2>
                        <p class="text-white">Our Attorney Portal simplifies case administration so you can spend your time doing things that matter to your case. Easily manage status reports, administrative needs, payoff requests and other tasks — all quickly handled in our online environment.</p>
                        <ul>
                           <li class="pl-0 pr-0">Request additional funding</li>
                           <li class="pl-0 pr-0">Request contract copies</li>
                           <li class="pl-0 pr-0">Add case details and documents</li>
                           <li class="pl-0 pr-0">Provide servicing status</li>
                           <li class="pl-0 pr-0">View payoff amounts</li>
                           <li class="pl-0 pr-0">Submit e-payments</li>
                        </ul>
                        <p class="text-white"><span class="author-50a8MVk9meKl">Already registered to use the portal? </span><span class="author-50a8MVk9meKl"><a class="link-forced color_or" href="" target="_blank" rel="">Log in now.</a></span><span class="author-50a8MVk9meKl"> Need to register? Call us toll-free at <a class="color_or" href="tel: 800-741-1667 ">(800) 741-1667</a> or use the contact form below.</span></p>
                     </div>
                </div>
                 
            </div>
        </div>
    </section>
    <section class="main-footer about-area-two" id="about" style="padding-top: 60px !important;">
        <div class="container">
           <div class="row">
              <div class="col-lg-6 col-md-6">
                 <div class="defult-title text-left bl-none" style="padding-top: 20px; padding-bottom: 50px;">
                    <h2 class="mb-2 text-white" style="padding-bottom: 2rem;">Nationally Known and Recognized </h2>
                    
                    <p class="text-white" style="padding-bottom: 2rem;">Oasis has worked with thousands of attorneys to help alleviate plaintiff burdens. Our service gives you the time you need to outlast insurance companies and see cases settle for their full, fair value, all with a company you can trust.</p>
                    
                 </div>
              </div>
              <div class="col-lg-6 col-md-6">
                 <div class="about-col notAlone slick-initialized slick-slider slick-dotted">
                    {{-- <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: block;">Previous</button> --}}
                    <div class="slick-list draggable">
                       <div class="slick-track" style="opacity: 1; width: 1110px;">
                          <div class="about-image testimonial slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 535px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms linear 0s;">
                             <div class="test-content text-white py-4 px-4">
                                <div class="row justify-content-between">
                                   <div class="col-md-3 visible-md visible-lg hidden-xs hidden-sm border-right border-white d-none d-md-block">
                                      <a href="https://www.youtube.com/watch?v=NsP9kLDy-Qg" data-lity="" class="text-center text-white play d-block" title="Play video" tabindex="-1">
                                         <svg width="64px" height="64px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mb-3 mt-1">
                                            <g id="Mockup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                               <g id="Desktop-//-Homepage-" transform="translate(-717.000000, -2894.000000)">
                                                  <g id="You're-Not-Alone" transform="translate(1.000000, 2650.000000)">
                                                     <g id="Videos" transform="translate(651.000000, 0.000000)">
                                                        <g id="Video">
                                                           <g id="Text" transform="translate(48.000000, 233.000000)">
                                                              <g id="Play-video" transform="translate(0.000000, 11.000000)">
                                                                 <g id="Play" transform="translate(17.000000, 0.000000)">
                                                                    <circle id="Oval" fill="#BC560B" fill-rule="nonzero" cx="32" cy="32" r="32"></circle>
                                                                    <g id="noun_play_2062732_000000" transform="translate(22.000000, 22.000000)" fill="#FFFFFF">
                                                                       <path d="M5.71428571,0.677419355 L17.8571429,7.4516129 C20.7142857,8.80645161 20.7142857,12.1935484 17.8571429,13.5483871 L5.71428571,20.3225806 C3.57142857,21.6774194 0,21 0,18.2903226 L0,2.70967742 C0,0 3.57142857,-0.677419355 5.71428571,0.677419355 Z" id="Path"></path>
                                                                    </g>
                                                                 </g>
                                                              </g>
                                                           </g>
                                                        </g>
                                                     </g>
                                                  </g>
                                               </g>
                                            </g>
                                         </svg>
                                         <br> Play Video 
                                      </a>
                                   </div>
                                   <div class="col-md-9 col-xs-12">
                                      <p>“I wasn’t receiving any money at all, not even from the insurance company, and Oasis came through… They’re just fantastic!”</p>
                                      <p class="visible-md visible-lg hidden-xs hidden-sm  d-md-block" style="font-style: normal"> <strong>Joyce</strong> — Palm Bay, FL</p>
                                      <div class="row visible-xs visible-sm align-items-center hidden-md hidden-lg" style="padding-top: 20px;">
                                         <div class="col-sm-7 col-xs-7">
                                            <p style="font-size:15px"> 
                                               <strong>Joyce</strong> — Palm Bay, FL
                                            </p>
                                         </div>
                                         <div class="col-sm-5 col-xs-5">
                                            <a href="https://www.youtube.com/watch?v=NsP9kLDy-Qg" data-lity="" class="text-center text-white play d-block" style="font-size: 14px;" title="Play video" tabindex="-1">
                                               <svg width="31px" height="32px" viewBox="0 0 31 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr-1">
                                                  <g id="Mockup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                     <g id="Mobile-Mockup-//-Homepage-(->768px)" transform="translate(-210.000000, -3793.000000)">
                                                        <g id="Group-9" transform="translate(210.000000, 3793.000000)">
                                                           <g id="Group-10">
                                                              <ellipse id="Oval" fill="#BC560B" fill-rule="nonzero" cx="15.5" cy="16" rx="15.5" ry="16"></ellipse>
                                                              <path d="M13.1428571,11.3548387 L19.8214286,14.9032258 C21.3928571,15.6129032 21.3928571,17.3870968 19.8214286,18.0967742 L13.1428571,21.6451613 C11.9642857,22.3548387 10,22 10,20.5806452 L10,12.4193548 C10,11 11.9642857,10.6451613 13.1428571,11.3548387 Z" id="Path" fill="#FFFFFF"></path>
                                                           </g>
                                                        </g>
                                                     </g>
                                                  </g>
                                               </svg>
                                               Play Video
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <img src="http://192.168.0.3/advantage-lending/public/module/images/about/1.png" alt="">
                          </div>
                          <div class="about-image testimonial slick-slide slick-current slick-active" style="width: 535px; position: relative; left: -555px; top: 0px; z-index: 999; opacity: 1;" data-slick-index="1" aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                             <div class="test-content text-white py-4 px-4">
                                <div class="row justify-content-between">
                                   <div class="col-md-3 visible-md visible-lg hidden-xs hidden-sm border-right border-white d-none d-md-block">
                                      <a href="https://www.youtube.com/watch?v=NsP9kLDy-Qg" data-lity="" class="text-center text-white play d-block" title="Play video" tabindex="0">
                                         <svg width="64px" height="64px" viewBox="0 0 64 64" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mb-3 mt-1">
                                            <g id="Mockup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                               <g id="Desktop-//-Homepage-" transform="translate(-717.000000, -2894.000000)">
                                                  <g id="You're-Not-Alone" transform="translate(1.000000, 2650.000000)">
                                                     <g id="Videos" transform="translate(651.000000, 0.000000)">
                                                        <g id="Video">
                                                           <g id="Text" transform="translate(48.000000, 233.000000)">
                                                              <g id="Play-video" transform="translate(0.000000, 11.000000)">
                                                                 <g id="Play" transform="translate(17.000000, 0.000000)">
                                                                    <circle id="Oval" fill="#BC560B" fill-rule="nonzero" cx="32" cy="32" r="32"></circle>
                                                                    <g id="noun_play_2062732_000000" transform="translate(22.000000, 22.000000)" fill="#FFFFFF">
                                                                       <path d="M5.71428571,0.677419355 L17.8571429,7.4516129 C20.7142857,8.80645161 20.7142857,12.1935484 17.8571429,13.5483871 L5.71428571,20.3225806 C3.57142857,21.6774194 0,21 0,18.2903226 L0,2.70967742 C0,0 3.57142857,-0.677419355 5.71428571,0.677419355 Z" id="Path"></path>
                                                                    </g>
                                                                 </g>
                                                              </g>
                                                           </g>
                                                        </g>
                                                     </g>
                                                  </g>
                                               </g>
                                            </g>
                                         </svg>
                                         <br> Play Video 
                                      </a>
                                   </div>
                                   <div class="col-md-9 col-xs-12">
                                      <p>“I wasn’t receiving any money at all, not even from the insurance company, and Oasis came through… They’re just fantastic!”</p>
                                      <p class="visible-md visible-lg hidden-xs hidden-sm  d-md-block" style="font-style: normal"> <strong>Joyce</strong> — Palm Bay, FL</p>
                                      <div class="row visible-xs visible-sm align-items-center hidden-md hidden-lg" style="padding-top: 20px;">
                                         <div class="col-sm-7 col-xs-7">
                                            <p style="font-size:15px"> 
                                               <strong>Joyce</strong> — Palm Bay, FL
                                            </p>
                                         </div>
                                         <div class="col-sm-5 col-xs-5">
                                            <a href="https://www.youtube.com/watch?v=NsP9kLDy-Qg" data-lity="" class="text-center text-white play d-block" style="font-size: 14px;" title="Play video" tabindex="0">
                                               <svg width="31px" height="32px" viewBox="0 0 31 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="mr-1">
                                                  <g id="Mockup" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                     <g id="Mobile-Mockup-//-Homepage-(->768px)" transform="translate(-210.000000, -3793.000000)">
                                                        <g id="Group-9" transform="translate(210.000000, 3793.000000)">
                                                           <g id="Group-10">
                                                              <ellipse id="Oval" fill="#BC560B" fill-rule="nonzero" cx="15.5" cy="16" rx="15.5" ry="16"></ellipse>
                                                              <path d="M13.1428571,11.3548387 L19.8214286,14.9032258 C21.3928571,15.6129032 21.3928571,17.3870968 19.8214286,18.0967742 L13.1428571,21.6451613 C11.9642857,22.3548387 10,22 10,20.5806452 L10,12.4193548 C10,11 11.9642857,10.6451613 13.1428571,11.3548387 Z" id="Path" fill="#FFFFFF"></path>
                                                           </g>
                                                        </g>
                                                     </g>
                                                  </g>
                                               </svg>
                                               Play Video
                                            </a>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <img src="http://192.168.0.3/advantage-lending/public/module/images/about/1.png" alt="">
                          </div>
                       </div>
                    </div>
                    {{-- <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">Next</button>
                    <ul class="slick-dots" style="display: block;" role="tablist">
                       <li class="" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="-1">1</button></li>
                       <li role="presentation" class="slick-active"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="0" aria-selected="true">2</button></li>
                    </ul>
                 </div>
                 --}}
              </div>
           </div>
        </div>
     </section>
     <section class="services-area-two" style="padding-top: 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center">Our pre-settlement funding process is</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                   <div class="bg-light text-center mb-3 h-100 p-4 blurb height-mobile-auto" style="background:#fff !important; border: 1px solid #FF741A !important">
                      <div class="mb-4">
                         <svg width="35px" height="58px" viewBox="0 0 35 58" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>noun_Time_1554506_000000</title>
                            <desc>Created with Sketch.</desc>
                            <g id="Wireframe" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <g id="Wireframe-//-Attorneys" transform="translate(-293.000000, -2554.000000)">
                                  <g id="noun_Time_1554506_000000" transform="translate(293.000000, 2554.000000)">
                                     <path d="M0,0 L0,3.34694589 C0.000554802544,10.883338 3.73232131,17.909935 9.92137927,22.0280541 C12.2306643,23.5653123 13.622881,26.1876153 13.622881,28.9999997 C13.622881,31.8123842 12.2306643,34.4346872 9.92137927,35.9719454 C3.732321,40.0900647 0.000554453215,47.1166622 2.29604121e-15,54.6530546 L0,58 L35,58 L35,54.6530546 C34.9994459,47.1166625 31.26768,40.0900651 25.0786223,35.9719454 C22.7693373,34.4346872 21.3771206,31.8123842 21.3771206,28.9999997 C21.3771206,26.1876153 22.7693373,23.5653123 25.0786223,22.0280541 C31.2676797,17.9099346 34.9994455,10.8833377 35,3.34694589 L35,0 L0,0 Z M2.58511258,2.63636364 L32.4148874,2.63636364 L32.4148874,3.34694589 C32.4137425,9.99246617 29.1225952,16.1881454 23.6648888,19.8190695 C20.6232306,21.8428866 18.789328,25.296219 18.789328,29.0000001 C18.789328,32.7037813 20.6232306,36.1571137 23.6648888,38.1809307 C29.1225953,41.8118549 32.4137426,48.0075343 32.4148874,54.6530546 L32.4148874,55.3636364 L2.58511258,55.3636364 L2.58511258,54.6530546 C2.58625776,48.007534 5.87740565,41.8118545 11.3351127,38.1809307 C14.3767709,36.1571137 16.2106735,32.7037813 16.2106735,29.0000001 C16.2106735,25.296219 14.3767709,21.8428866 11.3351127,19.8190695 C5.87740573,16.1881458 2.58625785,9.99246648 2.58511258,3.34694589 L2.58511258,2.63636364 Z" id="Shape" fill="#133D8D" fill-rule="nonzero"></path>
                                     <path d="M7,12 L29,12 C27.6423505,14.5944363 25.6431645,16.7971609 23.1932882,18.3978974 C19.9533817,20.5148659 18.0000462,24.1265076 18.0000465,28 C18.0000267,24.1264901 16.0466549,20.5148447 12.8067137,18.3978974 C10.3568366,16.7971612 8.35764999,14.5944366 7,12 Z" id="Path" fill="#3DB200"></path>
                                     <polygon id="Path" fill="#3DB200" points="11 54.564225 18.0000469 46.435775 25 54.564225"></polygon>
                                  </g>
                               </g>
                            </g>
                         </svg>
                      </div>
                      <div class="no-margin-bottom font-size-18">
                         <h4>Efficient</h4>
                         <p>Minimal phone calls or paperwork keeps you moving forward, allowing you to focus on the case itself. Use our <strong style="text-decoration: underline;"><a class="color_or" href="" target="_blank" rel="noopener">Attorney Portal</a></strong> for even more advantages.</p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="bg-light text-center mb-3 h-100 p-4 blurb height-mobile-auto" style="background:#fff !important; border: 1px solid #FF741A !important">
                      <div class="mb-4">
                         <svg width="74px" height="58px" viewBox="0 0 74 58" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>easy</title>
                            <desc>Created with Sketch.</desc>
                            <g id="Wireframe" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <g id="Wireframe-//-Attorneys" transform="translate(-664.000000, -2555.000000)" fill-rule="nonzero">
                                  <g id="easy" transform="translate(664.000000, 2555.000000)">
                                     <path d="M58.1168217,0.00938769923 C57.3722541,0.0730054887 56.7068494,0.489639879 56.3359454,1.12445999 L35.8202499,35.831085 C35.5886575,36.2170355 35.4811016,36.6622229 35.5115646,37.108772 L36.5326004,49.9785647 C36.5925522,50.7100437 37.0164478,51.3658675 37.6662303,51.7324433 C38.3160128,52.0990191 39.1085291,52.1294361 39.7856679,51.8137878 L51.6819218,46.2616571 C52.1008854,46.0660428 52.4488232,45.7499561 52.6792126,45.3556608 L73.1949081,10.6258051 C73.8225632,9.5606848 73.4508398,8.19951474 72.3638325,7.582587 L59.4465427,0.288155772 C59.0426125,0.0650486857 58.5787284,-0.0322018482 58.1168217,0.00938769923 Z M59.1378575,5.2827504 L68.1134742,10.3470371 L66.1426378,13.6690233 L57.190766,8.58150593 L59.1378575,5.2827504 Z M54.8874993,12.4610283 L57.4282162,13.90133 L43.893556,36.8764653 L41.329094,35.4129329 L54.8874993,12.4610283 Z M61.3698892,16.1082439 L63.863116,17.5253149 L50.2809658,40.4772196 L47.8352289,39.1066099 L61.3698892,16.1082439 Z M40.3318033,40.0126061 L46.7429581,43.636591 L40.8304487,46.4010411 L40.3318033,40.0126061 Z" id="Shape" fill="#133D8D"></path>
                                     <path d="M2.71969489,40.1287595 C1.6141803,40.1573458 0.689076891,40.9580543 0.525313092,42.0280715 C0.361549292,43.0980887 1.00636204,44.128773 2.05483439,44.4728953 C3.00253453,44.808532 2.74675167,44.6915981 2.79092994,45.0768928 C2.83510784,45.4621874 2.63527288,46.5104297 2.29228457,47.7251894 C1.94929626,48.9399492 1.45852838,50.3339382 1.6749141,52.0460946 C1.89129983,53.7582509 3.37071064,55.5896085 5.47411697,56.2973077 C8.69251062,57.3798942 11.7352139,56.1644654 14.4497337,55.2751581 C16.7406371,54.5245657 18.6625946,54.1111713 19.9823229,54.1600858 C19.9450603,54.5499894 19.8576057,54.921866 20.077303,55.6236182 C20.3701638,56.5590895 21.5139503,57.5940624 22.5942749,57.8305321 C24.5268709,58.2535905 26.3247418,57.8126537 28.079374,57.2962266 C29.8340062,56.7795021 31.4976529,56.0770809 32.6859075,55.5306955 C33.485759,55.2311474 34.0465245,54.5182907 34.1376956,53.6851522 C34.2288666,52.8520138 33.8350595,52.0391738 33.1181526,51.5807583 C32.4012458,51.1223428 31.4822068,51.0957029 30.738816,51.5117891 C29.6954827,51.9915675 28.1989737,52.6019209 26.773398,53.0217828 C25.7406402,53.3259002 25.0825833,53.3431838 24.4701313,53.3702429 C24.4965662,53.0111896 24.5620127,52.7339455 24.3988963,52.1390173 C24.1496936,51.230159 23.1072205,50.1128566 22.0243945,49.81595 C18.7560755,48.9197292 15.6989147,50.1633693 13.0012877,51.0471756 C10.3036606,51.9310563 7.99471863,52.4220598 6.94630808,52.0693252 C5.96965999,51.7408249 6.25581945,51.8493958 6.21021253,51.4885584 C6.16460537,51.127721 6.34338051,50.1203276 6.68511288,48.9099537 C7.0268451,47.6996543 7.52196482,46.2962243 7.32622837,44.5890486 C7.13049192,42.8817986 5.71020346,41.0078081 3.62200557,40.2681435 C3.33392768,40.1626006 3.02699679,40.1151876 2.71969489,40.1287595 Z" id="Path" fill="#3DB200"></path>
                                  </g>
                               </g>
                            </g>
                         </svg>
                      </div>
                      <div class="no-margin-bottom font-size-18">
                         <h4>Easy</h4>
                         <p class="p1"><span class="s1">Our streamlined turnaround includes prompt acknowledgements and offers conveniences like digital signatures.</span></p>
                      </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="bg-light text-center mb-3 h-100 p-4 blurb height-mobile-auto" style="background:#fff !important; border: 1px solid #FF741A !important">
                      <div class="mb-4">
                         <svg width="65px" height="60px" viewBox="0 0 65 60" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <title>Group 3</title>
                            <desc>Created with Sketch.</desc>
                            <g id="Wireframe" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                               <g id="Wireframe-//-Attorneys" transform="translate(-131.000000, -1114.000000)">
                                  <g id="Group-3" transform="translate(131.000000, 1114.000000)">
                                     <g id="noun_timer_62332_000000" fill="#133D8D">
                                        <path d="M35.645863,0.0108762644 C35.5827826,0.00543813218 35.5164394,0 35.4522714,0 C33.7219108,0 32.5277336,1.40086285 32.5277336,3.12801363 C32.5277336,4.83232426 33.1889902,6.21687271 35.7894252,6.25167676 L35.7894252,6.26255302 C48.137957,6.43222275 58.9442818,16.9821992 58.9442818,29.9260414 C58.9442818,42.976471 48.226052,53.7450604 35.1760228,53.7450604 C22.7241697,53.7450604 12.3724588,44.347968 11.4654062,31.9979698 L16.9621016,31.9979698 L8.47996319,17.9001559 L0,31.9979698 L5.20087007,31.9979698 C6.12206141,47.5967081 19.1666527,60 35.0727014,60 C51.5747511,60 65,46.5079941 65,30 C64.9989124,13.6943045 51.8825399,0.323025052 35.645863,0.0108762644 Z" id="Path"></path>
                                     </g>
                                     <g id="noun_dollar-sign_1819874_000000" transform="translate(27.000000, 17.000000)" fill="#3DB200">
                                        <path d="M8.9549988,7.1188 C11.1258069,7.1188 13.3791853,7.81328889 14.3153861,8.13857778 C14.5658289,8.22553333 14.842075,8.18653333 14.9932514,7.95715556 L16.9333485,5.01771111 C17.0851321,4.78833333 16.9630981,4.59275556 16.7144767,4.50233333 C15.7172588,4.14093333 13.1915808,3.31731111 10.3711392,3.09053333 L10.3711392,0.494288889 C10.3711392,0.166688889 10.195981,0 9.85143236,0 L7.1490783,0 C6.80452968,0 6.62937148,0.166688889 6.62937148,0.494288889 L6.62937148,3.20753333 C2.38186104,3.88786667 0.420514203,6.42951111 0.420514203,8.81717778 C0.420514203,11.7300444 2.88335384,13.7953111 7.74042695,14.9557778 C11.3665356,15.8218667 11.3665356,16.7754889 11.3665356,17.1828222 C11.3665356,18.6610667 9.28588691,18.8812 8.04520829,18.8812 C5.87166807,18.8812 3.61555761,18.1855556 2.67844607,17.8594 C2.42769967,17.7718667 2.15236434,17.8114444 2.0014915,18.0411111 L0.0662514325,20.982 C-0.0849249682,21.2110889 0.0371089938,21.4078222 0.285730424,21.4976667 C1.28325181,21.8590667 3.80892983,22.6829778 6.62937148,22.9094667 L6.62937148,25.5057111 C6.62937148,25.8333111 6.80452968,26 7.1490783,26 L9.85143236,26 C10.195981,26 10.3711392,25.8333111 10.3711392,25.5057111 L10.3711392,22.7921778 C14.6180425,22.1115556 16.5796929,19.5702 16.5796929,17.1825333 C16.5796929,14.2699556 14.1168533,12.2046889 9.25947657,11.0439333 C5.63367149,10.1778444 5.63367149,9.22393333 5.63367149,8.81688889 C5.63367149,7.33951111 7.71462375,7.1188 8.9549988,7.1188 Z" id="Path"></path>
                                     </g>
                                  </g>
                               </g>
                            </g>
                         </svg>
                      </div>
                      <div class="no-margin-bottom font-size-18">
                         <h4>Effective</h4>
                         <p class="p1"><span class="s1">Funds are typically sent to your client in as little as 24 hours, with no upfront out-of-pocket costs. </span></p>
                      </div>
                   </div>
                </div>
             </div>
    </section>
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="color_blue">Here to Help</h1>
                        <p>Looking for more information? Has your client asked you about Oasis Financial?</p>
                        <p>Contact us below or call <a class="color_or" href="tel:877.333.6680">(877) 333-6680</a>to receive a quick, informative response.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        <form method="post" enctype="multipart/form-data" id="gform_1" action="/#gf_1">
                                <div class="col-md-12">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h4><strong>All fields required</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="first_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="last_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" name="email" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" name="phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">ZIP Code<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="zip_code" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="law_firm_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Attorney’s Name<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" placeholder="First Name" name="attorney__first_name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1"></label>
                                                <input type="text" class="form-control" placeholder="Last Name" name="attorney__last_name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Phone<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="law_firm_phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn" type="submit">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.notAlone').slick({
            dots: true,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear',
            lazyLoad: 'ondemand',
        });
    </script>
    <script src="{{asset('module/lity/dist/lity.js')}}"></script>
@endsection