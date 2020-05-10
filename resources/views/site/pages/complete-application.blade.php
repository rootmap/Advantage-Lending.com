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
                                                <label class="gfield_label" for="exampleFormControlInput1">First Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" value="Enter Fiest Name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Last Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" value="Enter Last Name" id="exampleFormControlInput1">
                                            </div>
                                        </div>
 
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">How much money do you need?<span class='text-danger'>*</span></label>
                                                <input type="tel" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">
                                                            What was the date of your accident?<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                  <div class="form-group form-check">
                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                        <label class="form-check-label" for="exampleCheck1">Unknown date</label>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                           <div class="form-group">
                                                <label for="exampleFormControlSelect1">What state is your case in?<span>*</span></label>
                                                <select  class="form-control" id="exampleFormControlSelect1">
                                                <option>Select One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                                <small>
                                                    <p class="description" style="font-size: 11px;line-height:11px;color:black;">View Oasis Financial’s<a href="#"> state-specific licenses,</a> including South Carolina.</p>
                                                </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput2">What kind of case do you have<span>*</span></label>
                                                <select  class="form-control" id="exampleFormControlSelect2">
                                                <option>Select One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                                
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput3">
                                                    How did you hear about Oasis?<span class='text-danger'>*</span>
                                                </label>
                                               <select  class="form-control" id="exampleFormControlSelect3">
                                                <option>Select One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                           <div class="form-group">
                                                <label for="exampleFormControlInput1">Email<span>*</span></label>
                                              <input type="text" class="form-control" value="Enter Email Address" autocomplete="off" id="exampleFormControlInput1">
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                            <label for="exampleFormControlInput1">Phone<span>*</span></label>
                                              <input type="text" class="form-control" value="(018) 607-4802" autocomplete="off" id="exampleFormControlInput1">
                                              <small>
                                                  <p class="description" style="font-size: 11px;line-height:11px;color:black;margin-buttom:0;">By providing your phone number on this application, you consent to receive autodialed informational phone calls to the number you provided to Oasis about the status of your application or related funding.</p>
                                              </small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput3">
                                                   How should we contact you?<span class='text-danger'>*</span>
                                                </label>
                                               <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Email Me!</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Text/SMS!</label>
                                                </div>
                                            </div>
                                            <small>
                                                <p style="font-size: 11px;line-height:11px;color:black; margin-buttom:0;">
                                                    If you check Text/SMS You authorize Oasis Financial and its agents to call and text message me at the phone number provided in my application for information and marketing purposes using live operators and automated dialing systems. Message and data rates may apply. I understand my consent to receive autodialed marketing calls and text messages is not a condition of receiving funding
                                                </p>
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12">
                                           <div class="form-group">
                                                <label for="exampleFormControl4">Address<span>*</span></label>
                                              <input type="text" class="form-control" value="Enter Address" autocomplete="off" id="exampleFormControl4">
                                               
                                            </div>
                                        </div>
                                       
                                    </div>

                                     <div class="row">
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label for="StreetAddress">Street Address<span>*</span></label>
                                                <input type="text" class="form-control" value="Enter City"autocomplete="off" id="StreetAddress">

                                            </div>
                                        </div>
                                        <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleState">State</label>
                                                <select  class="form-control" id="exampleState">
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
                                                <label class="gfield_label" for="exampleFormZIPCode">ZIP Code</label>
                                                <input type="text" class="form-control" value="Enter ZIP Code" autocomplete="off" id="exampleFormZIPCode">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleAttorneyName">Attorney's Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" value="Enter First Name" autocomplete="off" id="exampleAttorneyName">
                                                <label class="gfield_label" for="exampleAttorneyName"></label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormLast"></label>
                                                <input type="text" class="form-control" value="Enter Last Name" autocomplete="off" id="exampleFormLast">
                                               
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleLawFirmName">Law Firm Name<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control"  autocomplete="off" id="exampleLawFirmName">
                                               
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleLawFirmPhone">Law Firm Phone<span class='text-danger'>*</span></label>
                                                <input type="text" class="form-control" value="(018) 607-4802" autocomplete="off" id="exampleLawFirmPhone">
                                                
                                            </div>
                                        </div>
                                     
                                    </div>
                                       <div class="row">
                                        <div class="col-md-12 col-xs-12 col-sm-12 col-lg-12 text-right">
                                            <p style="text-align: left;"><strong>IMPORTANT: Once you've submitted your application you must contact your Attorney and tell them they have your permission to speak to us about your case.</strong> <br><br>Incorrect or incomplete attorney information can lead to a delay and even decline in the application.</p>
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