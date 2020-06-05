@extends('site.layout.master')
@section('title','Complete Application')
@section('css')
    <style type="text/css">
        .innerpage-titlebar {
            padding: 80px 0 80px;
            position: relative;
            background: url("{{asset('upload/needatterneypagesetting/'.$page->background_image)}}");
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

        
        
    </style>
@endsection
@section('content')

    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$page->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$page->title}}</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h3 class="separator-center">{{$page->page_title}}</h3>
                        <p>{{$page->page_description}}</p>
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
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFirstName">First Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" name="first_name" value="Enter First Name" autocomplete="off" id="exampleFirstName">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFirstLast">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value="Enter Last Name" autocomplete="off" id="exampleFirstLast">
                                                
                                            </div>
                                        </div>
                                  </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="case_type">What kind of case do you have?</label>
                                                <select  class="form-control" name="case_type" id="case_type">
                                                <option value="">Select Case Type</option>
                                                    @isset($casetype)
                                                    @foreach ($casetype as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="state_case">What state is your case in?</label>
                                            <select  class="form-control" name="state_case" id="state_case">
                                                <option value="">Select State</option>
                                                @isset($state)
                                                    @foreach ($state as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
    
                                                </select>
                                            </div>
                                        </div>
                                     
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="phone">Phone<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" name="phone" value="Enter Phone Number" autocomplete="off" id="phone">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="email">Email</label>
                                                <input type="text" class="form-control" name="email" value="Enter Email Address" autocomplete="off" id="email">
                                            </div>
                                        </div>
                                  </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="message">Message</label>
                                                <textarea class="form-control" name="message" id="message" rows="3" style=height: 160px; width: 100%;></textarea>
                                                <p style="font-size:20px;">
                                                    {{$page->page_bottom_description}}
                                                </p>
                                            </div>
                                        </div>
                                     
                                      
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn  save-contact" type="button">{!!$page->page_bottom_button_text!!}</button>
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
    <meta name="need-an-attorney" content="/need-an-attorney">
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
            $("select[name=case_type]").val();
            $("select[name=state_case]").val();
            $("input[name=phone]").val("");
            $("input[name=email]").val("");
            $("textarea[name=message]").val("");
        }

        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-contact').click(function(){

                var contactUs = "";
                if($('meta[name="need-an-attorney"]').attr("content"))
                {
                    contactUs = $('meta[name="need-an-attorney"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;

                //alert(contactUsURL);
                //return false;

                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var case_type=$("select[name=case_type]").val();
                var state_case=$("select[name=state_case]").val();
                var phone=$("input[name=phone]").val();
                var email=$("input[name=email]").val();
                var message=$("textarea[name=message]").val();
                //Swal.fire('Oops...', 'Something went wrong!', 'error')
                Swal.showLoading ();
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(case_type==0){ swalErrorMsg("Case Type Required"); return false; }
                if(state_case==0){ swalErrorMsg("State Case Required"); return false; }
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
                        case_type: case_type,
                        state_case: state_case,
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