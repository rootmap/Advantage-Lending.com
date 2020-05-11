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
            <h3 class="fix-barcum-head">Need an Attorney?</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="appointment-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="about-col text-center">
                        <h3 class="separator-center">If you need an attorney, Oasis can help.</h3>
                        <p>Oasis is not a law firm, but we can connect you with legal professionals who can help advise on your specific situation.</p>
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
                                                <option>Select One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="state_case">What state is your case in?</label>
                                            <select  class="form-control" name="state_case" id="state_case">
                                                <option>Select One</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                                </select>
                                                <small>
                                                    <p style="font-size: 11px;line-height:11px;color:black;margin-top:-20px;">
                                                        View Oasis Financial’s<a href="#">state-specific licenses</a>, including South Carolina.
                                                    </p>
                                                </small>
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
                                                    Currently, Oasis is not able to refer residents of the following
                                                    states to an attorney: California, Indiana, Nevada, Oklahoma,
                                                    Tennessee, Vermont and West Virginia.
                                                </p>
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
