@extends('site.layout.master')
@section('title','Broker Partnerships')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/forbrokerpagesetting/'.$ForBrokerPageSetting->background_image)}}");
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
    .color_or{
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    .for-brokers p {
        margin-bottom: 1.5rem
    }
    .for-brokers-clint{
        margin-top: 3.5rem;
        margin-bottom: 1.5rem;
    }
    .for-brokers-clint h1{
        margin-bottom: .5rem;
        font-family: adelle,serif;
        font-weight: 700;
        line-height: 1.2;
        color: #133d8d;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$ForBrokerPageSetting->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$ForBrokerPageSetting->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="for-brokers">
                        <h2 class="h2 separator-left">{{$ForBrokerPageSetting->page_title}}</h2>
                        <p>{!!$ForBrokerPageSetting->page_detail!!}</p>
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
                        <h1 id="getstarted" class="color_blue">{{$ForBrokerPageSetting->form_title}}</h1>
                        <p>{!!$ForBrokerPageSetting->form_detail!!}</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        
                                <div class="col-md-12">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h4><strong>All fields required</strong></h4>
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
                                                <label class="gfield_label" for="exampleFormControlInput1">What state is your case in?<span class='text-danger'>*</span></label>
                                                <select name="state" class="form-control" style="margin-bottom:0px">
                                                    <option value="0">Select One</option>
                                                    @isset($USAState)
                                                        @foreach ($USAState as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                                <small class="form-text text-muted" style="font-size: 10px; text-align: initial">View Advantage-Lending Financial’s <a class="color_or" href="{{url('state-specific-licenses')}}" target="_blank">state-specific licenses</a>.</small>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">ZIP Code<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="zip_code" id="exampleFormControlInput1">
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
                                            <button class="btn btn-default simple-btn save-brokers" type="submit">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                      
                       
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('meta')
    <meta name="brokers-request" content="/brokers-request">
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
            $("input[name=first_name]").val("");
            $("input[name=last_name]").val("");
            $("input[name=phone]").val("");
            $("input[name=email]").val("");
            $("select[name=state]").val("");
            $("input[name=zip_code]").val("");
            $("textarea[name=message]").val(" ");
        }
        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-brokers').click(function(){

                var contactUs = "";
                if($('meta[name="brokers-request"]').attr("content"))
                {
                    contactUs = $('meta[name="brokers-request"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;

                //alert(contactUsURL);
                //return false;

                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var phone=$("input[name=phone]").val();
                var email=$("input[name=email]").val();
                var state=$("select[name=state]").val();
                var zip_code=$("input[name=zip_code]").val();
                var message=$("textarea[name=message]").val();

                


                Swal.showLoading ();
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(phone.length==0){ swalErrorMsg("Phone Number Required"); return false; }
                if(email.length==0){ swalErrorMsg("Email Address Required"); return false; }
                if(state.length==0){ swalErrorMsg("State by Required"); return false; }
                if(zip_code.length==0){ swalErrorMsg("zip code Required"); return false; }
                if(message.length==0){ swalErrorMsg("Detail Message Required"); return false; }

                $.ajax({
                    async: true,
                    type: "POST",
                    global: true,
                    dataType: "json",
                    url: contactUsURL,
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        phone: phone,
                        email: email,
                        state: state,
                        zip_code: zip_code,
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