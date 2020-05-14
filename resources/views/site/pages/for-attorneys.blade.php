@extends('site.layout.master')
@section('title','For Attorneys')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/forattorneypagesetting/'.$ForAttorneyPageSetting->background_image)}}");
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
        background-image: url({{url('module/images/arrow.svg')}});
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

        background-color: {{$ForAtterneyPortalsimplify->background_forecolor}};
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
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$ForAttorneyPageSetting->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$ForAttorneyPageSetting->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 0px">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6" style="padding-top:50px;">
                    <div class="about-col">
                        <h2 class="separator-left" style="color: #FF741A; font-weight: bolder; font-size: 34px;">{{$ForAttorneyPageSetting->page_title}}</h2>
                    </div>
                    <div class="" style="margin-bottom: 1px">
                        <p style="font-size:14px; font-weight: 600;">{!!$ForAttorneyPageSetting->page_detail!!}</p>
                    </div>
                    {{-- <div class="bg-light p-4 text-center font-size-24 text-dark font-family-serif mt-4">Founded in 2003 by attorneys who saw a specific need, Oasis helps bridge the gap between your client’s current financial struggles and future settlement.</div> --}}
                </div>
                <div class="col-lg-6 col-md-6">
                   <div class="about-col ">
                        <div class="about-image negative-margin">
                            <div>
                                <h1 id="getstarted" class="color_blue h1">{{$ForAttorneyPageSetting->page_products_services_title}}</h1>
                                <hr style="margin-top: 0; margin-bottom: 30px">
                            </div>
                            <div>
                                @isset($ForAttorneyProductAndService)
                                    @foreach ($ForAttorneyProductAndService as $item)
                                        <div class="wordmark"> 
                                        <img src="{{url('upload/forattorneyproductandservice/'.$item->logo)}}" alt="Oasis Financial" class="d-none d-md-block">
                                            <p>{!!$item->detail!!}</p>
                                            <p><a class="arrow-right" href="{{$item->link_url}}" rel="noopener">{{$item->link_text}}</a></p>
                                        </div>
                                    @endforeach
                                @endisset
                                
                            </div>    
                        </div>
                   </div>
                </div>
            </div>
        </div>
        @isset($ForAtterneyPortalsimplify)
            @if ($ForAtterneyPortalsimplify->module_status=="Active")
    <div class="bg-secondary leaders" style="background-image: url({{url('upload/foratterneyportalsimplify/'.$ForAtterneyPortalsimplify->background_image)}});">
                    <div class="container pt-5 pb-4 pt-md-5 pb-md-6">
                        <div class="row">
                            <div class="col-md-8 pb-4 pb-md-5">
                                <h2 class="h3 mb-3 d-inline-block text-white">
                                    {{$ForAtterneyPortalsimplify->title}}
                                </h2>
                                <p class="text-white">{!!$ForAtterneyPortalsimplify->detail!!}</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            @endif
        @endisset
    </section>
    @isset($ForAttorneyKnownandRecognized)
        @if ($ForAttorneyKnownandRecognized->module_status=="Active")
        <section class="main-footer about-area-two" id="about" style="padding-top: 60px !important; padding-bottom: 50px !important; --my-rootmap-fotter-color-first-back:{{$ForAttorneyKnownandRecognized->primary_background_color}}; --my-rootmap-fotter-color-second-back:{{$ForAttorneyKnownandRecognized->secondary_background_color}};">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="defult-title text-left bl-none" style="padding-top: 20px; padding-bottom: 50px;">
                                
                                <h2 class="mb-2 text-white" style="padding-bottom: 2rem;">{{$ForAttorneyKnownandRecognized->title}} </h2>
                                <p class="text-white" style="padding-bottom: 2rem;">{!!$ForAttorneyKnownandRecognized->detail!!}</p>
                                
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about-col notAlone">
                                <div class="about-image testimonial" style="width: 602px; height: 350px; background-image:url('{{asset('upload/forattorneyknownandrecognized/'.$ForAttorneyKnownandRecognized->video_background_image)}}')">
                                        <div class="test-content text-white py-4 px-4">
                                            <div class="row justify-content-between">
                                                    <div class="col-md-3 visible-md visible-lg hidden-xs hidden-sm border-right border-white d-none d-md-block"> 
                                                        <a href="{{$ForAttorneyKnownandRecognized->youtube_link}}" data-lity="" class="text-center text-white play d-block" title="Play video" tabindex="0"> 
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
                                                        <p>{{$ForAttorneyKnownandRecognized->video_short_detail}}</p>
                                                        <p class="visible-md visible-lg hidden-xs hidden-sm  d-md-block" style="font-style: normal"> <strong>{{$ForAttorneyKnownandRecognized->video_by}}</strong> — {{$ForAttorneyKnownandRecognized->video_location}}</p>
                                                        <div class="row visible-xs visible-sm align-items-center hidden-md hidden-lg" style="padding-top: 20px;">
                                                            <div class="col-sm-7 col-xs-7">
                                                                <p style="font-size:15px"> 
                                                                    <strong>{{$ForAttorneyKnownandRecognized->video_by}}</strong> — {{$ForAttorneyKnownandRecognized->video_location}}
                                                                </p>
                                                            </div>
                                                            <div class="col-sm-5 col-xs-5"> 
                                                                <a href="{{$ForAttorneyKnownandRecognized->youtube_link}}" data-lity="" class="text-center text-white play d-block" style="font-size: 14px;" title="Play video" tabindex="0"> 
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
                                        {{-- <img src="{{asset('upload/youarenotalonevideo/'.$item->video_image)}}" alt="{{$item->video_by}} - {{$item->video_from_location}}"> --}}
                                    </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </section>
        @endif
    @endisset
    
    
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="color_blue">{{$ForAttorneyPageSetting->form_title}}</h1>
                        <p>{!!$ForAttorneyPageSetting->form_detail!!}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        {{-- <form method="post" enctype="multipart/form-data" id="gform_1" action="/#gf_1"> --}}
                        <div id="gform_1">    
                            <div class="col-md-12">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h4><strong>All fields required</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Please contact me about:<span class="text-danger">*</span></label>
                                                <select name="contact_me_about" class="form-control">
                                                    <option value="">Select one </option>
                                                    @isset($ContactMeAbout)
                                                        @foreach ($ContactMeAbout as $item)
                                                        <option value="{{$item->id}}">{{$item->name}} </option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="first_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="last_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class="text-danger">*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" name="phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" name="email" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Please contact me by<span class="text-danger">*</span></label>
                                                <div class="form-check">
                                                    <input class="form-check-input removeLater" type="checkbox" name="contact_me_by" value="Email" id="defaultCheck1">
                                                    <label class="form-check-label removeLater" for="defaultCheck1">
                                                        Email
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="contact_me_by" value="Phone" id="defaultCheck2">
                                                    <label class="form-check-label" for="defaultCheck2">
                                                        Phone
                                                    </label>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Best time:<span class="text-danger">*</span></label>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="best_time" value="AM" id="defaultCheck3">
                                                    <label class="form-check-label" for="defaultCheck3">
                                                      AM
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="best_time" value="PM" id="defaultCheck4">
                                                    <label class="form-check-label" for="defaultCheck4">
                                                      PM
                                                    </label>
                                                  </div>
                                                  <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="best_time" value="Specific day/time" id="defaultCheck5">
                                                    <label class="form-check-label" for="defaultCheck5">
                                                        Specific day/time
                                                    </label>
                                                  </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Message</label>
                                                <textarea class="form-control" rows="5" cols="5" name="message"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn save-attorney" type="submit">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('meta')
    <meta name="attorney-request" content="/attorney-request">
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
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script> --}}
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
            $("select[name=contact_me_about]").val("");
            $("input[name=first_name]").val("");
            $("input[name=last_name]").val("");
            $("input[name=phone]").val();
            $("input[name=email]").val();
            $("input[name=contact_me_by]").serialize();
            $("input[name=best_time]").serialize();
            $("input[name=message]").val();
        }
        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-attorney').click(function(){

                var contactUs = "";
                if($('meta[name="attorney-request"]').attr("content"))
                {
                    contactUs = $('meta[name="attorney-request"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;

                //alert(contactUsURL);
                //return false;

                var contact_me_about=$("select[name=contact_me_about]").val();
                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var phone=$("input[name=phone]").val();
                var email=$("input[name=email]").val();
                var message=$("textarea[name=message]").val();

                var contact_me_by = [];
                $.each($("input[name='contact_me_by']:checked"), function(){
                    contact_me_by.push($(this).val());
                });
                var best_time = [];
                $.each($("input[name='best_time']:checked"), function(){
                    best_time.push($(this).val());
                });
                //Swal.fire('Oops...', 'Something went wrong!', 'error')

                //alert(contact_me_by);
                //alert(best_time);
                //return false;



                Swal.showLoading ();
                if(contact_me_about==0){ swalErrorMsg("Contact About Required"); return false; }
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(phone.length==0){ swalErrorMsg("Phone Number Required"); return false; }
                if(email.length==0){ swalErrorMsg("Email Address Required"); return false; }
                if(message.length==0){ swalErrorMsg("Detail Message Required"); return false; }
                // if(contact_me_by.length==0){ swalErrorMsg("Contact me by Required"); return false; }
                // if(best_time.length==0){ swalErrorMsg("Best time Required"); return false; }

                $.ajax({
                    async: true,
                    type: "POST",
                    global: true,
                    dataType: "json",
                    url: contactUsURL,
                    data: {
                        contact_me_about:contact_me_about,
                        first_name: first_name,
                        last_name: last_name,
                        phone: phone,
                        email: email,
                        contact_me_by: contact_me_by,
                        best_time: best_time,
                        message: message,
                        _token: csrftLarVe
                    },
                    success: function(res) {
                        console.log('Success', res);
                        Swal.hideLoading();

                        if(res.status==0){ swalErrorMsg(res.msg); return false; }
                        if(res.status==1){ 
                            swalSuccessMsg(res.msg); 
                            makeFieldEmpty();
                            return false; 
                        }

                        return false;
                
                    },
                    error: function(reject) {
                        return false;
                
                        console.log('Error', reject.status);
                        /* window.location.href = window.location.href; */
                    }
            });

       

                
                /* Swal.fire(
                    'The Internet?',
                    'That thing is still around?',
                    'question'
                    ) */
            });

            
        });
        
    </script>



@endsection