@extends('site.layout.master')
@section('title','Complete Application')
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

        
        
    </style>
@endsection
@section('content')

 {{-- {{dd($req->request->get('first_name'))}} --}}

    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Finish Your Free Application</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center" style="font-size: 18px;">Let’s get started — please fill out this pre-settlement funding application, or call (877) 333-6680. All fields required.</h1>
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
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class='text-danger'>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('first_name')}}"
                                                @endisset
                                                type="text" class="form-control" autocomplete="off" name="first_name" placeholder="Enter Fiest Name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class='text-danger'>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('last_name')}}"
                                                @endisset
                                                type="text" class="form-control" autocomplete="off" name="last_name" placeholder="Enter Last Name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">How much money do you need?<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" name="how_much_money_do_you_need" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="input-group date">
                                                <label class="gfield_label" for="exampleFormControlInput1">
                                                            What was the date of your accident?<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" name="what_was_the_date_of_your_accident" id="datepicker">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group" style="padding-top: 36px;">
                                                  <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input"  id="unknown_date_0">
                                                        <label class="form-check-label" for="exampleCheck1">Unknown date</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                           <div class="form-group">
                                                <label for="exampleFormControlSelect1">What state is your case in?<span>*</span></label>
                                                <select  class="form-control" name="state_case" id="exampleFormControlSelect1">
                                                <option value="0">Select State</option>
                                                @isset($USAState)
                                                    @foreach ($USAState as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
                                                </select>
                                                <small>
                                                    <p class="description" style="font-size: 11px;line-height:11px;color:black; margin-top:-20px;">View  advantage lending  Financial’s<a href="#"> state-specific licenses,</a> including South Carolina.</p>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" name="case_type" for="exampleFormControlInput2">What kind of case do you have<span>*</span></label>
                                                <select name="case_type" class="form-control" id="exampleFormControlSelect2">
                                                <option value="0">Select Type</option>
                                                @isset($CaseType)
                                                    @foreach ($CaseType as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput3">
                                                    How did you hear about advantage lending?<span class='text-danger'>*</span>
                                                </label>
                                               <select  class="form-control" name="how_did_you_heard" id="exampleFormControlSelect3">
                                                <option value="0">Select How</option>
                                                @isset($HearAbout)
                                                    @foreach ($HearAbout as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                           <div class="form-group">
                                                <label for="exampleFormControlInput1">Email<span>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('email')}}"
                                                @endisset
                                                type="text" class="form-control" name="email" placeholder="Enter Email Address" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone<span>*</span></label>
                                              <input 
                                              @isset($req)
                                                    value="{{$req->request->get('phone')}}"
                                              @endisset
                                              type="text" class="form-control" name="phone" placeholder="(018) 607-4802" autocomplete="off" id="exampleFormControlInput1">
                                              <small>
                                                  <p class="description" style="font-size: 11px;line-height:11px;color:black;margin-top:-20px;">By providing your phone number on this application, you consent to receive autodialed informational phone calls to the number you provided to Oasis about the status of your application or related funding.</p>
                                              </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput3">
                                                   How should we contact you?<span class='text-danger'>*</span>
                                                </label>
                                               <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="how_should_we_contact_you" type="checkbox" id="how_should_we_contact_you_0" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Email Me!</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" id="how_should_we_contact_you_1" name="how_should_we_contact_you" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Text/SMS!</label>
                                                </div>
                                            </div>
                                            <small>
                                                <p style="font-size: 11px;line-height:11px;color:black;margin-top:-20px;">
                                                    If you check Text/SMS You authorize Oasis Financial and its agents to call and text message me at the phone number provided in my application for information and marketing purposes using live operators and automated dialing systems. Message and data rates may apply. I understand my consent to receive autodialed marketing calls and text messages is not a condition of receiving funding
                                                </p>
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                                <label for="exampleFormControl4">Address<span>*</span></label>
                                              <input type="text" class="form-control" name="street_address" placeholder="Enter Address" autocomplete="off" id="exampleFormControl4">
                                               
                                            </div>
                                        </div>
                                       
                                    </div>

                                     <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="StreetAddress">Street Address<span>*</span></label>
                                                <input type="text" class="form-control" name="city_name" placeholder="Enter City"autocomplete="off" id="StreetAddress">

                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleState">State</label>
                                                <select  class="form-control" name="state" id="exampleState">
                                                <option value="0">Select State</option>
                                                @isset($USAState)
                                                    @foreach ($USAState as $item)
                                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                                    @endforeach
                                                @endisset
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormZIPCode">ZIP Code</label>
                                                <input type="text" class="form-control" name="zip_code" placeholder="Enter ZIP Code" autocomplete="off" id="exampleFormZIPCode">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleAttorneyName">Attorney's Name<span class='text-danger'>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('attorney__first_name')}}"
                                                @endisset
                                                type="text" class="form-control" placeholder="Enter First Name" name="attorney__first_name" autocomplete="off" id="exampleAttorneyName">
                                                <label class="gfield_label" for="exampleAttorneyName"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormLast"></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('attorney__last_name')}}"
                                                @endisset
                                                type="text" class="form-control" placeholder="Enter Last Name" name="attorney__last_name" autocomplete="off" id="exampleFormLast">
                                               
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleLawFirmName">Law Firm Name<span class='text-danger'>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('law_firm_name')}}"
                                                @endisset
                                                type="text" class="form-control" placeholder="Enter Law Firm Name" name="law_firm_name"  autocomplete="off" id="exampleLawFirmName">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleLawFirmPhone">Law Firm Phone<span class='text-danger'>*</span></label>
                                                <input 
                                                @isset($req)
                                                    value="{{$req->request->get('law_firm_phone')}}"
                                                @endisset
                                                type="text" class="form-control" placeholder="(018) 607-4802" name="law_firm_phone" autocomplete="off" id="exampleLawFirmPhone">
                                                
                                            </div>
                                        </div>
                                     
                                    </div>
                                       <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <p style="text-align: left; font-size:20px;"><strong>IMPORTANT: Once you've submitted your application you must contact your Attorney and tell them they have your permission to speak to us about your case.</strong> <br><br>Incorrect or incomplete attorney information can lead to a delay and even decline in the application.</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <button class="btn btn-default simple-btn save-application" type="button">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
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
    <meta name="complete-application" content="/completeapplication-site">
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

        function swalSuccessRedurectMsg(msg,url){
            Swal.fire({
                icon: 'success',
                title: '<h3 class="text-success">Thank You</h3>',
                html: '<h5>'+msg+'</h5>'
            }).then(function() {
                window.location = url;
            });

            setTimeout(function(){ window.location.href=url; }, 3000);
        }

        function makeFieldEmpty(){
            $("input[name=first_name]").val("");
            $("input[name=last_name]").val("");
            $("input[name=how_much_money_do_you_need]").val("");
            $("input[name=what_was_the_date_of_your_accident]").val("");
            $("input[name=email]").val("");
            $("input[name=phone]").val("");
            $("input[name=street_address]").val("");
            $("input[name=city_name]").val("");
            $("input[name=zip_code]").val("");
            $("input[name=law_firm_name]").val("");
            $("input[name=law_firm_phone]").val("");
            $("input[name=attorney__first_name]").val("");
            $("input[name=attorney__last_name]").val("");
        }

        $(document).ready(function(){
            $.getScript("https://cdn.jsdelivr.net/npm/sweetalert2@9");

            $('.save-application').click(function(){

                var contactUs = "";
                if($('meta[name="complete-application"]').attr("content"))
                {
                    contactUs = $('meta[name="complete-application"]').attr("content");
                }

                var contactUsURL=baseUrl+""+contactUs;
                var first_name=$("input[name=first_name]").val();
                var last_name   =$("input[name=last_name]").val();
                var how_much_money_do_you_need   =$("input[name=how_much_money_do_you_need]").val();
                var what_was_the_date_of_your_accident   =$("input[name=what_was_the_date_of_your_accident]").val();
                var state_case=$("select[name=state_case]").val();
                var case_type=$("select[name=case_type]").val();
                var how_did_you_heard=$("select[name=how_did_you_heard]").val();
                var email=$("input[name=email]").val();
                var phone=$("input[name=phone]").val();
                var how_should_we_contact_you=$("input[name=how_should_we_contact_you]").val();
                var street_address=$("input[name=street_address]").val();
                var city_name=$("input[name=city_name]").val();
                var state=$("select[name=state]").val();
                var zip_code=$("input[name=zip_code]").val();
                var law_firm_name=$("input[name=law_firm_name]").val();
                var law_firm_phone=$("input[name=law_firm_phone]").val();
                var attorney__first_name=$("input[name=attorney__first_name]").val();
                var attorney__last_name=$("input[name=attorney__last_name]").val();

                var how_should_we_contact_you_0=$('#how_should_we_contact_you_0').is(':checked'); 
                var how_should_we_contact_you_1=$('#how_should_we_contact_you_1').is(':checked'); 
                var unknown_date_0=$('#unknown_date_0').is(':checked'); 

                var contactWEDo='';
                if(how_should_we_contact_you_0==true)
                {
                    contactWEDo+='Email';
                }

                if(how_should_we_contact_you_1==true)
                {
                    if(contactWEDo.length>0)
                    {
                        contactWEDo+=',';
                        contactWEDo+='Text/SMS';
                    }
                    else
                    {
                        contactWEDo+='Text/SMS';
                    }
                }

                if(unknown_date_0==true)
                {
                    what_was_the_date_of_your_accident="Unknown Date";
                }

                /* alert(contactWEDo);
                return false; */
                //Swal.fire('Oops...', 'Something went wrong!', 'error')
                Swal.showLoading ();
                if(first_name.length==0){ swalErrorMsg("First Name Required"); return false; }
                if(last_name.length==0){ swalErrorMsg("Last Name Required"); return false; }
                if(how_much_money_do_you_need.length==0){ swalErrorMsg("How Much Money You Need Required"); return false; }
                if(what_was_the_date_of_your_accident.length==0){ swalErrorMsg("Mention Accident Date/Unknown Date Required"); return false; }
                if(state_case==0){ swalErrorMsg("What State Case Required"); return false; }
                if(case_type==0){ swalErrorMsg("Your Case Type Required"); return false; }
                if(how_did_you_heard==0){ swalErrorMsg("How Did You Hear About us Required"); return false; }
                if(street_address.length==0){ swalErrorMsg("Street Address Required"); return false; }
                if(city_name.length==0){ swalErrorMsg("Street City Required"); return false; }
                if(state==0){ swalErrorMsg("Mention Your Current State Required"); return false; }
                if(email.length==0){ swalErrorMsg("Contact About Required"); return false; }
                if(phone.length==0){ swalErrorMsg("State Case Required"); return false; }
                if(zip_code.length==0){ swalErrorMsg("Zip Code Required"); return false; }
                if(law_firm_name.length==0){ swalErrorMsg("Law Firm Name Required"); return false; }
                if(law_firm_phone.length==0){ swalErrorMsg("Law Firm Phone Required"); return false; }
                if(attorney__first_name.length==0){ swalErrorMsg("Attorney First Name Required"); return false; }
                if(attorney__last_name.length==0){ swalErrorMsg("Attorney Last Name Required"); return false; }
                if(contactWEDo.length==0){ swalErrorMsg("How we contact you Required"); return false; }
                

                $.ajax({
                    async: true,
                    type: "POST",
                    global: true,
                    dataType: "json",
                    url: contactUsURL,
                    data: {
                        first_name: first_name,
                        last_name: last_name,
                        how_much_money_do_you_need: how_much_money_do_you_need,
                        what_was_the_date_of_your_accident: what_was_the_date_of_your_accident,
                        state_case: state_case,
                        case_type: case_type,
                        how_did_you_heard: how_did_you_heard,
                        street_address: street_address,
                        city_name: city_name,
                        state: state,
                        zip_code: zip_code,
                        phone: phone,
                        email: email,
                        law_firm_name: law_firm_name,
                        law_firm_phone: law_firm_phone,
                        attorney__first_name: attorney__first_name,
                        attorney__last_name: attorney__last_name,
                        contactWEDo: contactWEDo,
                        _token: csrftLarVe
                    },
                    success: function(res) {
                        console.log('Success', res);
                        Swal.hideLoading();

                        if(res.status==0){ 
                            swalErrorMsg(res.msg); return false; 
                        }
                        else if(res.status==1){ 
                            swalSuccessRedurectMsg(res.msg,baseUrl); 
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
                });

            });

            
        });
        
    </script>
@endsection