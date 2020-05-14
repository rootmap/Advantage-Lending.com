@extends('site.layout.master')
@section('title','FAQ')
@section('css')
    <style type="text/css">
        .innerpage-titlebar {
            padding: 80px 0 80px;
            position: relative;
        background: url("{{asset('upload/faqpagesetting/'.$faqinfo->background_image)}}");
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
        @media (min-width: 768px){
            .negative-margin {
                z-index: 999;
                position: relative;
                margin-top: -2rem;
            }
            .d-md-block {
                display: block !important;
            }
        }
        .mb-4, .my-4 {
            margin-bottom: 1.5rem !important;
        }
        .d-none {
            display: none !important;
        }
        .faq-link {
            -webkit-transition: all linear .15s;
            transition: all linear .15s;
        }
        .font-size-24 {
            font-size: 24px;
        }
        .font-family-serif {
            font-family: adelle,serif;
        }
        .text-secondary {
            color: #FF741A !important;
        }
        .font-weight-bold {
            font-weight: 700 !important;
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
        .h-100 {
            height: 100px !important;
        }
        .shadow-sm {
            -webkit-box-shadow: 0 .125rem .25rem rgba(0,0,0,.075) !important;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075) !important;
        }
        .justify-content-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
        .flex-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important;
        }
        .d-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
        }
        .bg-white {
            background-color: #fff !important;
        }
        .faq-link p {
            margin-bottom: 0;
        }
        .faq-area h1{
            margin-bottom: 2.5rem;
            font-family: adelle,serif;
            font-weight: 700;
            line-height: 1.2;
            color: #FF741A;
        }
        .bg-md-info {
            background-color: #eef9ff;
        }
        .color_or{
            font-weight: 700;
            line-height: 1.2;
            color: #FF741A;
        }
        .color_blue{
            font-weight: 700;
            line-height: 1.2;
            color: #FF741A;
        }
    </style>
@endsection
@section('content')

    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar" style="--my-innerpage-titlebar-color:{{$faqinfo->background_forecolor}}">
        <div class="container">
            <h3 class="fix-barcum-head">{{$faqinfo->title}}</h3>
        </div>
    </section>

    @isset($faq)
        <!-- Appointment Start -->
        <section class="negative-margin mb-4 d-md-block" style="padding:0px;">
            <div class="container">
                <div class="row">
                    @foreach ($faq as $key=>$item) 
                        <div class="col-md-2 {{$key==0?'col-md-offset-1':''}}">
                            <a href="#{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}" class="page-scroll text-secondary faq-link bg-white py-4 px-4 d-flex flex-column justify-content-center font-family-serif font-size-24 h-100 shadow-sm text-center font-weight-bold">
                                <p>{{$item['name']}}</p>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @foreach ($faq as $key=>$item) 
        <section class="faq-area" id="{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}" style="padding: 40px">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>{{$item['name']}}</h1>
                        @isset($item['contentData'])
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                @foreach ($item['contentData'] as $keyd=>$roteen)
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="headingTwo{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}{{$keyd}}">
                                            <h4 class="panel-title">
                                                <a class="{{$keyd==0?'':'collapsed'}}" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}{{$keyd}}" aria-expanded="{{$keyd==0?'true':'false'}}" aria-controls="collapseTwo{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}{{$keyd}}">
                                                    {!!$roteen->content_title!!}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseTwo{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}{{$keyd}}" class="panel-collapse collapse {{$keyd==0?'in':''}}" aria-expanded="{{$keyd==0?'true':'false'}}" role="tabpanel" aria-labelledby="headingTwo{{preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(" ","",$item['name']))}}{{$keyd}}">
                                            <div class="panel-body">
                                                <p>{{$roteen->content_detail}} </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endisset
                        
                    </div>
                </div>
            </div>
        </section>
        @endforeach
    @endisset
    
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="color_blue">{{$faqinfo->form_title}}</h1>
                        <p>{!!$faqinfo->form_detail!!}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        <form method="post" enctype="multipart/form-data" id="gform_1" action="{{url('complete-application')}}">
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
                                                <input type="text" class="form-control" autocomplete="off"   name="law_firm_name" id="exampleFormControlInput1">
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
                                            <button class="btn btn-default simple-btn save-partial-application" type="submit">{{$faqinfo->form_button_text}} <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
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



@section('meta')
    <meta name="complete-application" content="/complete-application">
@endsection
@section('js')
    <script>
        $("a.page-scroll").click(function() {
            var targetDiv = $(this).attr('href');
            $('html, body').animate({
                scrollTop: $(targetDiv).offset().top
            }, 2000);
        });
    </script>
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
                

            });

            
        });
        
    </script>
  
@endsection