@extends('site.layout.master')
@section('title','Home')
@section('css')
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="{{asset('module/lity/dist/lity.css')}}" rel="stylesheet">
@endsection
@section('content')
    <!-- Hero Start -->
    <section class="hero-area" style="background-image: url('{{asset('module/images/extra/04d36791ff504e1ffe82199330c10a97.png')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-col">
                        <h1>Welcome !</h1>
                        <h2>To Advantage - Lending.com</h2>

                        <h1 class="cd-headline clip text-white">
                            <span class="cd-words-wrapper">
                                <b class="is-visible">What About Your Bill</b>
                                <b>How Will You Pay Your House Rent</b>
                                <b>Your Life is Most Important </b> 
                            </span> 
                        </h1>
                        
                        <h3>Don't settle for less than you deserve.</h3>
                        <h4>Get cash now while you wait for your full settlement.</h4>
                        <p class="pt50"></p>
                        <a class="btn btn-default simple-btn" href="contact.html">Apply Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About start -->
    <section class="about-area about-area-two" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">

                    <div class="defult-title text-left bl-none" style="padding-bottom: 50px;">
                        <h1 class="mb-2">How We <span>Help</span></h1>
                        <p class="">Pre-settlement financing puts money in your pocket before your case is settled. And because the money is repaid from your settlement, you can get it now, with no risk, no out-of-pocket costs, and your credit score is not a factor.</p>
                    </div>

                    <div class="about-col">


                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="fa fa-money"></i>
                                <p style="font-weight: 700; line-height:50px;"> Get a $500 – $100,000 advance on your settlement </p>
                            </div>
                        </div>
                        
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="fa fa-clock-o"></i>
                                <p style="font-weight: 700; line-height:50px;"> Get cash in as little as 24 hours once approved </p>
                            </div>
                        </div>
                        
                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="fa fa-shield"></i>
                                <p style="font-weight: 700;"> No risk — If you lose your case, you owe us nothing; pay us back only from your settlement </p>
                            </div>
                        </div>

                        <div class="choose-box">
                            <div class="choose-icon">
                                <i class="fa fa-briefcase"></i>
                                <p style="font-weight: 700;"> BBB A+ Rating, trusted by more than 250,000 people like you </p>
                            </div>
                        </div>
                        
                    </div>



                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="about-col">
                       <div class="about-image">
                            <img src="{{asset('module/images/about/1.png')}}" alt="">
                        </div>
                   </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Separator Start -->
    <section class="separator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="separator-col">
                        <div class="col-md-10">
                            <h2>Better Days Start Today</h2>
                            <p class="text-white">When you’ve been injured in an accident, it can be difficult to make ends meet while you wait for your settlement money. You don’t have to struggle to pay bills — take control today and find peace of mind with help from Oasis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
  
    <!--services two start-->
    <section class="services-area-two" style="padding-top: 58px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class=" defult-title text-center" style="padding-bottom: 2em;">
                        <h1>Funding You Need<span> Now.</span></h1>
                        <p class="">We can help you access part of your settlement faster in a few simple steps.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="{{asset('module/images/service/1.jpg')}}" alt="">
                        <div class="service-two-content">
                            <h4>General Constructing</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInUp" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="{{asset('module/images/service/2.jpg')}}" alt="">
                        <div class="service-two-content">
                            <h4>Making Bridge</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInRight" data-wow-duration="1s" data-wow-delay="0s">
                        <img src="{{asset('module/images/service/3.jpg')}}" alt="">
                        <div class="service-two-content">
                            <h4>Design Build</h4>
                            <p>There are many variations of passages of Lorem Ipsum available, suffered alteration in some form.</p>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a class="btn btn-default simple-btn" title="Apply Now" href="service-details.html"><i class="fa fa-file-text-o" aria-hidden="true"></i> Apply Now</a>
                </div>   
                
            </div>
            
        </div>
    </section>

    <section class="main-footer about-area-two" id="about" style="padding-top: 60px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">

                    <div class="defult-title text-left bl-none" style="padding-top: 20px; padding-bottom: 50px;">
                        <h1 class="mb-2 text-white" style="padding-bottom: 2rem;">You Are Not <span> Alone </span> </h1>
                        <p class="text-white" style="padding-bottom: 2rem;">Last month we helped more than 3,000 people just like you, providing funding during trying times. Our lawsuit settlement funding helps put you back in command of your finances, your responsibilities, and your life.</p>
                        <p style="margin-top: 20px;">
                            <a href="#" class="btn simple-btn">Learn How It Works <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="about-col notAlone">
                        <div class="about-image testimonial">
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
                                                        </svg> Play Video
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                            </div>
                            <img src="{{asset('module/images/about/1.png')}}" alt="">
                        </div>
                        <div class="about-image testimonial" style=" ">
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
                                                        </svg> Play Video
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            <img src="{{asset('module/images/about/1.png')}}" alt="">
                        </div>
                   </div>
                </div>
            </div>
            
        </div>
    </section>


        <!-- Team Start -->
    <section class="team-area" style="padding:58px 0;">
        <div class="container">
            <div class="row" style="padding-bottom: 20px;">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <h1 style="padding-bottom: 20px;">Help For Many <span> Case Types</span></h1>
                        <p class="" style="padding-bottom: 20px;">Oasis provides financial support when you need it most, funding a variety of personal injury case types.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft our-team" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="team-profile">
                            <h4>Auto Accident</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft our-team" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/professions-and-jobs.svg')}}" alt="">
                        </div>
                        <div class="team-profile">
                            <h4>Workers Camp</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft our-team" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people_accident.svg')}}" alt="">
                        </div>
                        <div class="team-profile">
                            <h4> Premises Negligence</h4>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a href="#" class="btn simple-btn">View All Types Of Cases <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </div>   
                
            </div>
        </div>
    </section>

    <!-- Never Settle for Less start -->
    <section class="counter-area about-area-two" id="about" style="padding:40px 0 30px !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="padding-top:50px;">
                    <div class="about-col">
                        <h2 class="separator-left" style="color: #FF741A; font-weight: bolder; font-size: xxx-large;">Never Settle For Less</h2>
                    </div>

                    <div class="about-col">
                        <p style="font-size:2rem; font-weight: 600;">Oasis understands that bills don’t wait — and cases don’t settle quickly. We’ll work to get you a cash advance now, allowing your attorney more time to fight for the full value of your case.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="about-col">
                       <div class="about-image">
                            <img src="{{asset('module/images/extra/Depositphotos_214193542_xl-2015.jpg')}}" alt="">
                        </div>
                   </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center">Let’s Get Started</h1>
                        <h5>Apply now — It’s fast and free, with no obligation.</h5>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        <form method='post' enctype='multipart/form-data' id='gform_1' action='/#gf_1'>
                                <div class="col-md-12">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h4><strong>All fields required</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class='text-danger'>*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">ZIP Code<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Attorney’s Name<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" placeholder="First Name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1"></label>
                                                <input type="text" class="form-control"  placeholder="Last Name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Phone<span class='text-danger'>*</span></label>
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

    <!-- Appointment Start -->
    <section class="about-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center-default">Glossary</h1>
                        <p>There is a lot of terminology used in referring to pre-settlement and personal injury cases. The below glossary of terms and phrases is meant to provide some clarification around what each means and how they relate to the products and services offered by Oasis Financial.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        
                        <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is web design?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What is web development?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How can I be a developer?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How can I be a developer?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        How can I be a developer?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nisl lorem, dictum id pellentesque at, vestibulum ut arcu. Curabitur erat libero, egestas eu tincidunt ac, rutrum ac justo. Vivamus condimentum laoreet lectus, blandit posuere tortor aliquam vitae. Curabitur molestie eros. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
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