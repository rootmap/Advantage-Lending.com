@extends('site.layout.master')
@section('title','Home')
@section('css')
    
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link href="{{asset('module/lity/dist/lity.css')}}" rel="stylesheet">
@endsection
@section('content')
    @isset($slider)
        @if ($slider->module_status=="Active")
            <!-- Hero Start -->
            <section class="hero-area" style="--my-slider-back:{{$slider->slider_color_scheme}}; --my-rootmap-area-back:url('{{asset('upload/slider/'.$slider->slider_background_image)}}');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="hero-col">
                                <h1>{{$slider->heading_one}}</h1>
                                <h2>{{$slider->heading_two}}</h2>

                                <h1 class="cd-headline clip text-white">
                                    <span class="cd-words-wrapper">
                                        @if(!empty($slider->animated_text))
                                            <?php 
                                                $animationArray=explode(",",$slider->animated_text);
                                                $animate_visible=1;
                                            ?>
                                            @foreach ($animationArray as $item)
                                                @if ($animate_visible==1)
                                                    <b class="is-visible">{{$item}}</b>
                                                @else
                                                    <b>{{$item}}</b>
                                                @endif
                                                <?php $animate_visible++; ?>
                                            @endforeach
                                        @endif
                                    </span> 
                                </h1>
                                
                                <h3>{{$slider->heading_three}}</h3>
                                <h4>{{$slider->heading_four}}</h4>
                                <p class="pt50"></p>
                                <a class="btn btn-default simple-btn" href="{{url('/'.$slider->slider_button_url)}}">{{$slider->slider_button_text}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endisset
    
    @isset($HowWeHelp)
        @if ($HowWeHelp->module_status=="Active")
            <!-- About start -->
            <section class="about-area about-area-two" id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">

                            <div class="defult-title text-left bl-none" style="padding-bottom: 50px;">
                                <?php 
                                    $heading=$HowWeHelp->section_title; 
                                    $heading_ar=explode(" ",$heading);
                                    $focusText=$heading_ar[key(array_slice($heading_ar, -1, 1, true))];
                                    $unFocusText=str_replace($focusText,"",$heading); 
                                ?>
                                <h1 class="mb-2">{{$unFocusText}} <span>{{$focusText}}</span></h1>
                                <p class="" style="margin-top: 2rem;">{{$HowWeHelp->section_detail}}</p>
                            </div>

                            <div class="about-col">
                                <div class="choose-box">
                                    <div class="choose-icon">
                                        {!!$HowWeHelp->section_one_icon!!}
                                        <p style="font-weight: 700; line-height:50px;">{{$HowWeHelp->section_one_content}}</p>
                                    </div>
                                </div>
                                
                                <div class="choose-box">
                                    <div class="choose-icon">
                                        {!!$HowWeHelp->section_two_icon!!}
                                        <p style="font-weight: 700; line-height:50px;">{{$HowWeHelp->section_two_content}}</p>
                                    </div>
                                </div>
                                
                                <div class="choose-box">
                                    <div class="choose-icon">
                                        {!!$HowWeHelp->section_three_icon!!}
                                        <p style="font-weight: 700;">{{$HowWeHelp->section_three_content}}</p>
                                    </div>
                                </div>

                                <div class="choose-box">
                                    <div class="choose-icon">
                                        {!!$HowWeHelp->section_four_icon!!}
                                        <p style="font-weight: 700;">{{$HowWeHelp->section_four_content}}</p>
                                    </div>
                                </div>
                                
                            </div>



                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="about-col">
                            <div class="about-image">
                                    <img src="{{asset('upload/howwehelp/'.$HowWeHelp->section_image)}}" alt="{{$HowWeHelp->section_image}}">
                                </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        @endif
    @endisset

    @isset($BetterDaysStart)
        @if ($BetterDaysStart->module_status=='Active')
                <!-- Separator Start -->
                <section class="separator-area" style="--my-separator-area-after-back:url('{{asset('upload/betterdaysstart/'.$BetterDaysStart->content_image)}}')">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="separator-col">
                                    <div class="col-md-10">
                                        <h2>{{$BetterDaysStart->content_title}}</h2>
                                        <p class="text-white">{{$BetterDaysStart->content_detail}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
        @endif
    @endisset


    @isset($FundingNeedPageContent)
        @if ($FundingNeedPageContent->module_status=='Active')
            <!--services two start-->
            <section class="services-area-two" style="padding-top: 58px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=" defult-title text-center" style="padding-bottom: 2em;">
                                <?php 
                                    $heading=$FundingNeedPageContent->title; 
                                    $heading_ar=explode(" ",$heading);
                                    $focusText=$heading_ar[key(array_slice($heading_ar, -1, 1, true))];
                                    $unFocusText=str_replace($focusText,"",$heading); 
                                ?>
                                <h1 class="mb-2">{{$unFocusText}} <span>{{$focusText}}</span></h1>
                                <p class="">{{$FundingNeedPageContent->detail}}</p>
                            </div>
                        </div>
                    </div>
                    @isset($FundingYouNeed)
                        <div class="row">
                            @foreach ($FundingYouNeed as $item)
                                <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                                        <img src="{{asset('upload/fundingyouneed/'.$item->image)}}" alt="{{$item->title}}">
                                        <div class="service-two-content" style="--my-rootmap-service-two-content-back:{!!$item->block_forecolor!!};">
                                            <h4>{{$item->title}}</h4>
                                            <p>{{$item->short_detail}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach                            
                        </div>
                    @endisset
                    
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <a class="btn btn-default simple-btn" title="Apply Now" href="{{url('/'.$FundingNeedPageContent->bottom_button_url)}}"> {!!$FundingNeedPageContent->bottom_button_text!!}    </a>
                        </div>   
                        
                    </div>
                    
                </div>
            </section>
        @endif
    @endisset
    
    @isset($YouAreNotAlone)
        @if ($YouAreNotAlone->module_status=="Active")
        <section class="main-footer about-area-two" id="about" style="padding-top: 60px !important; padding-bottom: 50px !important; --my-rootmap-fotter-color-first-back:{{$YouAreNotAlone->background_first_color}}; --my-rootmap-fotter-color-second-back:{{$YouAreNotAlone->background_second_color}};">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="defult-title text-left bl-none" style="padding-top: 20px; padding-bottom: 50px;">
                                <?php 
                                    $heading=$YouAreNotAlone->title; 
                                    $heading_ar=explode(" ",$heading);
                                    $focusText=$heading_ar[key(array_slice($heading_ar, -1, 1, true))];
                                    $unFocusText=str_replace($focusText,"",$heading); 
                                ?>
                                <h1 class="mb-2 text-white" style="padding-bottom: 2rem;">{{$unFocusText}} <span> {{$focusText}}</span> </h1>
                                <p class="text-white" style="padding-bottom: 2rem;">{{$YouAreNotAlone->detail}}</p>
                                <p style="margin-top: 20px;">
                                    <a href="{{url('/'.$YouAreNotAlone->section_button_url)}}" class="btn simple-btn"> {!!$YouAreNotAlone->section_button_text!!}</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            @isset($YouAreNotAloneVideo)
                                <div class="about-col notAlone">
                                       
                                        
                                
                                @foreach ($YouAreNotAloneVideo as $item)
                                    <div class="about-image testimonial" style="width: 602px; height: 350px; background-image:url('{{asset('upload/youarenotalonevideo/'.$item->video_image)}}')">
                                            <div class="test-content text-white py-4 px-4">
                                                <div class="row justify-content-between">
                                                        <div class="col-md-3 visible-md visible-lg hidden-xs hidden-sm border-right border-white d-none d-md-block"> 
                                                            <a href="{{$item->youtube_video_link}}" data-lity="" class="text-center text-white play d-block" title="Play video" tabindex="0"> 
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
                                                                <br> {{$item->play_video_text}}
                                                            </a>
                                                        </div>
                                                        <div class="col-md-9 col-xs-12">
                                                            <p>{{$item->short_detail}}</p>
                                                            <p class="visible-md visible-lg hidden-xs hidden-sm  d-md-block" style="font-style: normal"> <strong>{{$item->video_by}}</strong> — {{$item->video_from_location}}</p>
                                                            <div class="row visible-xs visible-sm align-items-center hidden-md hidden-lg" style="padding-top: 20px;">
                                                                <div class="col-sm-7 col-xs-7">
                                                                    <p style="font-size:15px"> 
                                                                        <strong>{{$item->video_by}}</strong> — {{$item->video_from_location}}
                                                                    </p>
                                                                </div>
                                                                <div class="col-sm-5 col-xs-5"> 
                                                                    <a href="{{$item->youtube_video_link}}" data-lity="" class="text-center text-white play d-block" style="font-size: 14px;" title="Play video" tabindex="0"> 
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
                                                                        </svg> {{$item->play_video_text}}
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            {{-- <img src="{{asset('upload/youarenotalonevideo/'.$item->video_image)}}" alt="{{$item->video_by}} - {{$item->video_from_location}}"> --}}
                                        </div>
                                @endforeach
                                </div>
                            @endisset
                            
                        </div>
                    </div>
                    
                </div>
            </section>
        @endif
    @endisset
    

    @isset($HelpOnManyCase)
        @if ($HelpOnManyCase->module_status=="Active")
            <!-- Team Start HelpOnManyCase HelpOnManyCaseTypes -->
            <section class="team-area" style="padding:58px 0;">
                <div class="container">
                    <div class="row" style="padding-bottom: 20px;">
                        <div class="col-md-12">
                            <div class="defult-title text-center">
                                <?php 
                                    $heading=$HelpOnManyCase->title; 
                                    $heading_ar=explode(" ",$heading);
                                    $focusText=$heading_ar[key(array_slice($heading_ar, -1, 1, true))];
                                    $unFocusText=str_replace($focusText,"",$heading); 
                                ?>
                                <h1 style="padding-bottom: 20px;">{{$unFocusText}}<span> {{$focusText}}</span></h1>
                                <p class="" style="padding-bottom: 20px;">{{$HelpOnManyCase->detail}}</p>
                            </div>
                        </div>
                    </div>
                    @isset($HelpOnManyCaseTypes)
                    <div class="row">
                        @foreach ($HelpOnManyCaseTypes as $item)
                            <div class="col-md-4 col-sm-6 col-xs-6 fw600">
                                <div class="service-col-two wow bounceInLeft our-team" style="--my-rootmap-service-two-content-back:{{$HelpOnManyCase->case_block_forecolor}};" data-wow-duration="1s" data-wow-delay="0s">
                                    <div class="service-two-content text-center">
                                        <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('upload/helponmanycasetypes/'.$item->image)}}" alt="">
                                    </div>
                                    <div class="team-profile" style="--my-rootmap-team-profile-back:{{$HelpOnManyCase->case_block_bottom_forecolor}};">
                                        <h4 style="color:{{$HelpOnManyCase->case_block_bottom_text_color}};">{{$item->title}}</h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @endisset
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                            <a href="{{url('/'.$HelpOnManyCase->button_url)}}" class="btn simple-btn">{!!$HelpOnManyCase->button_text!!}</a>
                        </div>   
                        
                    </div>
                </div>
            </section>
        @endif
    @endisset
    
    @isset($NeverSettleForLess)
        @if ($NeverSettleForLess->module_status=="Active")
            <!-- Never Settle for Less start -->
            <section class="counter-area about-area-two" id="about" style="padding:40px 0 30px !important;">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6" style="padding-top:50px;">
                            <div class="about-col">
                                <h2 class="separator-left" style="color: #FF741A; font-weight: bolder; font-size: xxx-large;">{{$NeverSettleForLess->title}}</h2>
                            </div>

                            <div class="about-col">
                                <p style="font-size:2rem; font-weight: 600;">{{$NeverSettleForLess->detail}}</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                        <div class="about-col">
                            <div class="about-image">
                                    <img src="{{asset('upload/neversettleforless/'.$NeverSettleForLess->image)}}" alt="{{$NeverSettleForLess->title}}">
                                </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </section>
        @endif
    @endisset
    

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
                        <form method='post' enctype='multipart/form-data' id='gform_1' action='{{url('complete-application')}}'>
                                {{ csrf_field() }}
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
                                                <input type="text" class="form-control" autocomplete="off" name="first_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="last_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class='text-danger'>*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" name="email" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" name="phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">ZIP Code<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="zip_code" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="law_firm_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Attorney’s Name<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" placeholder="First Name" name="attorney__first_name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1"></label>
                                                <input type="text" class="form-control"  placeholder="Last Name" name="attorney__last_name" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Law Firm Phone<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="law_firm_phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn save-partial-application" type="submit">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </section>

    @isset($GlossarySectionContent)
        @if ($GlossarySectionContent->module_status=="Active")
            <!-- GlossarySectionContent -->
            <section class="about-area" id="appointment" style="padding:60px 0 60px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="about-col text-center">
                                <h1 id="getstarted" class="separator-center-default">{{$GlossarySectionContent->title}}</h1>
                                <p>{{$GlossarySectionContent->detail}}</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <div class="appointment-col">
                                
                                {{-- <div class="row">
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
                                </div> --}}

                                @isset($Glossary)
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            @foreach ($Glossary as $key=>$item)
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="heading{{$key}}">
                                                        <h4 class="panel-title">
                                                            <a class="{{$key==0?'':'collapsed'}}" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}"  aria-expanded="{{$key==0?'true':'false'}}" aria-controls="collapse{{$key}}">
                                                               {{$item->title}}
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapse{{$key}}" class="panel-collapse collapse {{$key==0?'in':''}}" aria-expanded="{{$key==0?'true':'false'}}" role="tabpanel" aria-labelledby="heading{{$key}}">
                                                        <div class="panel-body">
                                                            <p>{{$item->detail}} </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endisset
                            
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endisset
    
@endsection
@section('meta')
    <meta name="complete-application" content="/complete-application">
@endsection
@section('js')
    <script>
        var csrftLarVe = $('meta[name="csrf-token"]').attr("content"),
        baseUrl = $('meta[name="base-url"]').attr("content");

        

        function swalErrorMsg(msg){
            Swal.fire({
                icon: 'error',
                title: '<h3 class="text-danger">Warning</h3>',
                html: '<h5>'+msg+'!!!</h5>'
            });
        }

        function swalSuccessMsg(msg){
            Swal.fire({
                icon: 'success',
                title: '<h3 class="text-success">Thank You</h3>',
                html: '<h5>'+msg+'</h5>'
            });
        }

        function makeFieldEmpty(){
            $("input[name=first_name]").val("");
            $("input[name=last_name]").val("");
            $("input[name=email]").val();
            $("input[name=phone]").val();
            $("input[name=zip_code]").val("");
            $("input[name=law_firm_name]").val("");
            $("input[name=law_firm_phone]").val("");
            $("input[name=attorney__first_name]").val("");
            $("input[name=attorney__last_name]").val("");
        }

        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-partial-application').click(function(){

                var contactUs = "";
                if($('meta[name="complete-application"]').attr("content"))
                {
                    contactUs = $('meta[name="complete-application"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;
                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var email=$("input[name=email]").val();
                var phone=$("input[name=phone]").val();
                var zip_code=$("input[name=zip_code]").val();
                var law_firm_name=$("input[name=law_firm_name]").val();
                var law_firm_phone=$("input[name=law_firm_phone]").val();
                var attorney__first_name=$("input[name=attorney__first_name]").val();
                var attorney__last_name=$("input[name=attorney__last_name]").val();
                //Swal.fire('Oops...', 'Something went wrong!', 'error')
                Swal.showLoading ();
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(email.length==0){ swalErrorMsg("Contact About Required"); return false; }
                if(phone.length==0){ swalErrorMsg("State Case Required"); return false; }
                if(zip_code.length==0){ swalErrorMsg("Zip Code Required"); return false; }
                if(law_firm_name.length==0){ swalErrorMsg("Law Firm Name Required"); return false; }
                if(law_firm_phone.length==0){ swalErrorMsg("Law Firm Phone Required"); return false; }
                if(attorney__first_name.length==0){ swalErrorMsg("Attorney First Name Required"); return false; }
                if(attorney__last_name.length==0){ swalErrorMsg("Attorney Last Name Required"); return false; }
                return true;
                /* $.ajax({
                    async: true,
                    type: "POST",
                    global: true,
                    dataType: "json",
                    url: contactUsURL,
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        contact_about_id: contact_about_id,
                        state_case_id: state_case_id,
                        phone: phone,
                        email: email,
                        message: message,
                        _token: csrftLarVe
                    },
                    success: function(res) {
                        console.log('Success', res);
                        Swal.hideLoading();

                        if(res.status==0){ 
                            swalErrorMsg(res.msg); return false; 
                        }
                        else if(res.status==1){ 
                            swalSuccessMsg(res.msg); 
                            makeFieldEmpty();
                            return false; 
                        }

                        return false;
                
                    },
                    error: function(reject) {
                        return false;
                
                        console.log('Error', reject.status);
                        window.location.href = window.location.href;
                    }
                }); */

            });

            
        });
        
    </script>
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