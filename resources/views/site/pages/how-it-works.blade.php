@extends('site.layout.master')
@section('title','How It Works')
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
        a.arrow-right {
            color: #bc560b;
            border-color: #bc560b;
        }
        
        a.arrow-right {
            display: inline-block;
            background-image: url({{ url('module/images/arrow.svg') }});
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
        @media (min-width: 768px){
            .mb-md-4, .my-md-4 {
                margin-bottom: 1.5rem !important;
            }
        }
        .mb-5, .my-5 {
            margin-bottom: 3rem !important;
        }
        .mt-2, .my-2 {
            margin-top: .5rem !important;
        }
        .font-size-18 {
            font-size: 18px;
        }
        .color_or{
            color: #FF741A;
        }
        .separator-right.wow.animated:before {
            left: 0;
            -webkit-transition: left ease-out 1s;
            transition: left ease-out 1s;
        }
        
        .separator-right.wow:before {
            left: 1000px;
        }
        .separator-right:before {
            content: '';
            position: absolute;
            bottom: -2rem;
            left: 0;
            right: -1000px;
            height: 3px;
            background-color: #FF741A;
        }
        .separator-right {
            position: relative;
            display: inline-block;
            margin-bottom: 4rem;
        }
        h2, h3, h4, h5, h6, .h2, .h3, .h4, .h5, .h6 {
            text-transform: none !important;
        }
        body, body * {
            font-display: auto;
        }
        h2, .h2 {
            font-size: 2.5rem;
        }
        .pre ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .pre li {
            padding-left: 5.5rem;
            padding-top: 1.6rem;
            padding-bottom: .6rem;
            margin-bottom: 1rem;
            background-image: url({{ url('module/images/check.svg') }});
            background-position: 0 center;
            background-repeat: no-repeat;
            background-size: auto;
            font-size: 20px;
            font-weight: 600;
        }
        .text-md-left {
            text-align: left !important;
        }
        .d-md-none {
            display: none !important;
        }
        .casesWe h1{
            font-weight: 700;
        }
        .bg-info {
            background-color: #eef9ff !important;
        }
        .expert-img {
            background: #fff;
        }
        
        .rounded {
            border-radius: 5px !important;
        }
        .border-secondary {
            border-color: #133d8d !important;
        }
        .border {
            border: 1px solid #133d8d !important;
        }
        .expert-img img {
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .expert-img {
            background: #fff;
        }
        
        
        .expert-img {
            position: relative;
            height: 100px;
        }
        @media (min-width: 768px){
            .expert-img {
                height: 160px;
            }
        }
        .pr-md-2, .px-md-2 {
            padding-right: .5rem !important;
        }
        .mt-md-4, .my-md-4 {
            margin-top: 1.5rem !important;
        }
        .pl-md-2, .px-md-2 {
            padding-left: .5rem !important;
        }
        .pt-md-3, .py-md-3 {
            padding-top: 1rem !important;
        }
        .pb-md-3, .py-md-3 {
            padding-bottom: 1rem !important;
        }
        .pl-3, .px-3 {
            padding-left: 1rem !important;
        }
        .pr-3, .px-3 {
            padding-right: 1rem !important;
        }
        .pb-2, .py-2 {
            padding-bottom: .5rem !important;
        }
        .pt-2, .py-2 {
            padding-top: .5rem !important;
        }
    </style>
@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">How it Works</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="about-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center">Don’t Settle for Less</h1>
                        <p>There is a lot of terminology used in referring to pre-settlement and personal injury cases. The below glossary of terms and phrases is meant to provide some clarification around what each means and how they relate to the products and services offered by Oasis Financial.</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 fw600 ">
                    <div class="service-col-two serviceHoberBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>1. You Apply</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.</p>
                            <a class="btn btn-default simple-btn" title="Apply Now" href="#"><i class="fa fa-file-text-o" aria-hidden="true"></i> Apply Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>2. We Review</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>We’ll evaluate your application as it is submitted. We’ll also consult with your attorney. To facilitate this part of the process, we’ll only ask him or her to provide key documents necessary to help us assess your case.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>3. We Pay</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>If we determine that you qualify for pre-settlement funding, we’ll provide cash from your final settlement. Qualified applicants generally receive $500 to $100,000, sometimes within 24 hours after approval.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>4. You Benefit</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>You can use your money to cover routine expenses or costs stemming from your injury/injuries. It’s as simple as that. Oasis Financial helps you get cash quickly when you need it the most. With this peace of mind, you can concentrate on your recovery.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <section class="counter-area about-area-two" id="about" style="padding:40px 0 30px !important;">
        <div class="container">
            <div class="row">
                <div class="col-md-7 ">
                    <h1 class=" color_or">Cases We Fund</h1>
                    <div class="font-size-18">Oasis offers financial assistance for a wide variety of personal injury case types, including auto accidents, workers’ comp, slip and fall, and many more.</div>
                    <p><a class="arrow-right mt-2 mb-md-4 mb-5" href="">Learn more</a></p>
                    <img src="{{ url('module/images/extra/Depositphotos_214193542_xl-2015.jpg') }}" alt="Oasis support Image" class="img-fluid d-block m-auto object-fit-cover w-100 rounded">
                 </div>
                 <div class="col-md-5 pre casesWe">
                    <h1 class="separator-right color_or">Pre-settlement funding is a good option for you if:</h1>
                    <ul>
                       <li>You have been injured</li>
                       <li>You have an attorney</li>
                       <li>You are struggling to make ends meet while waiting for your settlement</li>
                    </ul>
                    <div class="text-md-left"><a class="arrow-right" href="">Don’t have an attorney? <br class="d-md-none">Oasis can help.</a></div>
                 </div>
            </div>
            
        </div>
    </section>
    <section class="counter-area about-area-two bg-info" id="about" style="padding:40px 0 30px !important;">
        <div class="container">
            <div class="row">
               <div class="col-md-6">
                    <h1 class="color_or">Don’t hesitate – take the first step to securing the money you need</h1>
                    <p><span style="font-weight: 400;">You have a lot of options when it comes to pre-settlement funding, but our competitors can’t match our simple, affordable, risk-free process. As experts in the field, we have earned an&nbsp; A+ rating from the Better Business Bureau, and our four-star rating from Trustpilot. We have also helped thousands of people by providing financial relief when they need it the most.&nbsp;</span></p>
                    <p><span style="font-weight: 400;">At a time when you should be fully focused on your recovery, the last thing you need is to stress over financial troubles. </span></p>
               </div>
               <div style="padding-top: 120px;">
                <div class="col-md-3 col-sm-6">
                    <div class="rounded border border-secondary mt-md-4 expert-img" style="border-width: 2px !important;"> 
                        <img src="{{ url('module/images/bbaplus.png') }}" alt="Expert Assistance" class="img-fluid" style="max-width:60%;">
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="rounded border border-secondary mt-md-4 expert-img py-2 py-md-3 px-3 px-md-2" style="border-width: 2px !important;">
                       <div class="trustpilot-widget" data-locale="en-US" data-template-id="53aa8807dec7e10d38f59f32" data-businessunit-id="5bdc94abfbd6140001fa449c" data-style-height="150px" data-style-width="100%" data-theme="light" data-stars="1,2,3,4,5" style="position: relative;">
                        <iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" loading="auto" src="https://widget.trustpilot.com/trustboxes/53aa8807dec7e10d38f59f32/index.html?templateId=53aa8807dec7e10d38f59f32&amp;businessunitId=5bdc94abfbd6140001fa449c#locale=en-US&amp;styleHeight=150px&amp;styleWidth=100%25&amp;theme=light&amp;stars=1%2C2%2C3%2C4%2C5" style="position: relative; height: 150px; width: 100%; border-style: none; display: block; overflow: hidden;"></iframe> 
                        </div>
                    </div>
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
                        <h1 id="getstarted" class="color_or">Need help? Ready to get started?</h1>
                        <p>Contact our team toll-free at <a class="color_or" href="tel:877.333.6680">(877) 333-6680</a>, or start our free, no obligation application.</p>
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
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">ZIP Code<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Attorney’s Name<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" placeholder="First Name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1"></label>
                                                <input type="text" class="form-control" placeholder="Last Name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Phone<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
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
    
@endsection