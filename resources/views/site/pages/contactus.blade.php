@extends('site.layout.master')
@section('title','Contact Us')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/contactus/'.$ContactUs->background_image)}}");
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
    .bg-md-white.shadow {
        margin-bottom: 30px;
    }
    .shadow {
        -webkit-box-shadow: 0 .5rem 1rem rgba(0,0,0,.35) !important;
        box-shadow: 0 .5rem 1rem rgba(0,0,0,.35) !important;
    }
    .bg-md-white {
        background-color: #fff;
    }
    .pl-md-6, .px-md-6 {
        padding-left: 4rem !important;
    }
    .pr-md-5, .px-md-5 {
        padding-right: 3rem !important;
    }
    .mt-4, .my-4 {
        margin-top: 1.5rem !important;
    }
    .gform_wrapper {
        margin-bottom: 16px;
        margin-top: 16px;
        max-width: 100%;
        overflow-x: hidden;
    }
    .gform_wrapper *, .gform_wrapper :after, .gform_wrapper :before {
        box-sizing: border-box!important;
    }
    .gform_wrapper form {
        text-align: left;
        max-width: 100%;
        margin: 0 auto;
    }
    .contact{
        padding: 2rem;
    }
    .form-text{
        color: #000;
        font-weight: 700;
    }

    .contact_info{
        padding-top: 3rem;
    }
    .contact_info p{
        color: #000;
        margin-bottom: 1rem;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$ContactUs->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$ContactUs->title}}</h3>
        </div>
    </section>
    <section class="appointment-area" style="padding: 40px">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <p class="p1">{!!$ContactUs->form_heading!!}</p>
                    
                    <div class="contact-form col-default gform_wrapper shadow mt-4">
                        <div class="appointment-col">
                                <div class="col-md-12" style="padding-bottom: 2rem; padding-top:2rem;">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h4><strong>All fields required</strong></h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="first_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="last_name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        {{-- ContactMeAbout --}}
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Please contact me about<span class='text-danger'>*</span></label>
                                                <select name="contact_about_id" class="form-control">
                                                    <option value="0">Select One</option>
                                                    @isset($ContactMeAbout)
                                                        @foreach ($ContactMeAbout as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                            </div>
                                        </div>
                                        {{-- USAState --}}
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">What state is your case in?<span class='text-danger'>*</span></label>
                                                <select name="state_case_id" class="form-control" style="margin-bottom:0px">
                                                    <option value="0">Select One</option>
                                                    @isset($USAState)
                                                        @foreach ($USAState as $item)
                                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    @endisset
                                                </select>
                                                <small class="form-text text-muted" style="font-size: 9px; text-align: initial">View Advantage-Lending Financial’s <a class="color_or" href="{{url('state-specific-licenses')}}" target="_blank">state-specific licenses</a>.</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Phone<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" name="phone" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Email<span class='text-danger'>*</span></label>
                                                <input type="email" class="form-control" autocomplete="off" name="email" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Message<span class='text-danger'>*</span></label>
                                                <textarea class="form-control textarea-hight-full" id="message" name="message" rows="5" placeholder="Message" required=""></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn save-contact" type="button">{{$ContactUs->form_button_text}} <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>


                            
                        </div>
                    </div>
                    <div class="contact_info">
                        {!!$ContactUs->form_bottom_content!!}
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('meta')
    <meta name="contact-us" content="/contact-us">
@endsection
@section('js')
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
            $("select[name=contact_about_id]").val();
            $("select[name=state_case_id]").val();
            $("input[name=phone]").val("");
            $("input[name=email]").val("");
            $("textarea[name=message]").val("");
        }

        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-contact').click(function(){

                var contactUs = "";
                if($('meta[name="contact-us"]').attr("content"))
                {
                    contactUs = $('meta[name="contact-us"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;

                //alert(contactUsURL);
                //return false;

                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var contact_about_id=$("select[name=contact_about_id]").val();
                var state_case_id=$("select[name=state_case_id]").val();
                var phone=$("input[name=phone]").val();
                var email=$("input[name=email]").val();
                var message=$("textarea[name=message]").val();
                //Swal.fire('Oops...', 'Something went wrong!', 'error')
                Swal.showLoading ();
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(contact_about_id==0){ swalErrorMsg("Contact About Required"); return false; }
                if(state_case_id==0){ swalErrorMsg("State Case Required"); return false; }
                if(phone.length==0){ swalErrorMsg("Phone Number Required"); return false; }
                if(email.length==0){ swalErrorMsg("Email Address Required"); return false; }
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