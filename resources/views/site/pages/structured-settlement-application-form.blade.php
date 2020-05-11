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

    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">It's already your money — Receive a fair value now</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <p>If your case has already settled and you are receiving payments over time, Oasis Structure Settlements™ may be able to help if you need money sooner. Use this form, or call us at (877) 333-6680, and we can connect you with a structured settlement funding specialist.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        <form method='post' enctype='multipart/form-data' id='gform_1' action='/#gf_1'>
                                <div class="col-md-12">
                                    <div class="row pb-3">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <h3 class="separator-left">Advantage-Lending Structured Settlements™ Funding</h3>
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
                                                <label class="gfield_label" for="exampleFirstLast">Last name</label>
                                                <input type="text" class="form-control" name="last_name" value="Enter Last Name" autocomplete="off" id="exampleFirstLast">
                                                
                                            </div>
                                        </div>
                                   
                                    </div>
                                    <div class="row">
                                       
                                     <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                            <div class="form-group">
                                               
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="age_over_18" type="checkbox" id="age_over_18_0" value="option1">
                                                    <label class="form-check-label" for="age_over_18_0">Are you over the age of 18?<span class='text-danger'>*</span></label>
                                                    <p>(We cannot purchase structured settlements of minors.)</p>

                                                </div>
                                            </div>
                                        </div> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                                <label for="exampleStreetAddress">Address<span>*</span></label>
                                              <input type="text" class="form-control" name="address" value="Enter Address" autocomplete="off" id="exampleStreetAddress">
                                              
                                            </div>
                                        </div>
                                    </div>

                                
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleCity">Street Address</label>
                                                <input type="tel" class="form-control" name="street_address" value="Enter City Name" autocomplete="off" id="exampleCity">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">State</label>
                                            <select  class="form-control" name="state" id="exampleFormControlSelect3">
                                                <option>Select State</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleZIPCODE">ZIP CODE</label>
                                                <input type="text" class="form-control"name="zip_code" value="Enter ZIP CODE" autocomplete="off" id="exampleZIPCODE">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleCity">When did your case settle?<span>*</span></label>
                                                <input type="Date" class="form-control" name="when_did_your_case_settle" autocomplete="off" id="exampleCity">
                                                 <small>
                                                  <p class="description" style="font-size: 11px;line-height:11px;color:black; margin-top:-20px;">
                                                    (If the case has not yet settled or settled within the past 30 days or so, it’s NOT a structured settlement.)</p>
                                              </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleEmail">Email<span>*</span></label>
                                                    <input type="email" class="form-control" name="email" autocomplete="off" id="exampleEmail">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="examplePhone">Phone<span>*</span></label>
                                                <input type="text" class="form-control" name="phone" autocomplete="off" id="examplePhone">
                                            <small>
                                                  <p class="description" style="font-size: 11px;line-height:11px;color:black;margin-top:-20px;">
                                                    By providing your phone number on this application, you consent to receive autodialed informational phone calls to the number you provided to Oasis about the status of your application or related funding.
                                                </p>
                                              </small>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleAmount">What was the total amount of the award?<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" name="total_amount_of_the_award"  autocomplete="off" id="exampleAmount">
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="examplePayment">How much do you receive in each payment?<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" name="how_much_receive_each_payment" autocomplete="off" id="examplePayment">
                                              
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                                <label for="exampleFormNeed">How much do you need now?<span>*</span></label>
                                              <input type="text" class="form-control" name="how_much_do_you_need_now" autocomplete="off" id="exampleFormNeed">
                                               
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                                <p style="font-size:20px;">
                                                    
                                                    Please be aware that not all structured settlements meet our 
                                                    purchase criteria. In those instances where we may not purchase your 
                                                    settlement, we work with group of non-affiliated companies that may be able to provide
                                                    you a quote and purchase your settlement. By submitting this application,
                                                    you acknowledge that Oasis, consistent with its <a href="#">Privacy Policy</a>, may refer your 
                                                    application to a non-affiliated company. For further information, 
                                                    including how to opt out, visit our <a href="#">Privacy Policy</a>.
                                                    <br><br>
                                                    Would you like us to refer your application to a non-affiliated company if we do not process your case ourselves?*
                                                    
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" name="refer_your_application" type="radio" name="exampleRadios" id="refer_your_application_0" value="option1" checked>
                                                <label class="form-check-label" for="refer_your_application_0">
                                                    Yes
                                                </label>
                                                </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="refer_your_application" id="refer_your_application_1" value="option2">
                                                <label class="form-check-label" for="refer_your_application_1">
                                                    No
                                                </label>
                                                </div>
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