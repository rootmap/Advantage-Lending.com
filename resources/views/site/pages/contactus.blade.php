@extends('site.layout.master')
@section('title','Contact Us')
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
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Contact Us</h3>
        </div>
    </section>
    <section class="appointment-area" style="padding: 40px">
        <div class="container">
            <div class="row">

                <div class="col-md-8 col-md-offset-2">
                    <p class="p1"><span class="s1">Thank you for exploring <a class="color_or" href="https://www.oasisfinancial.com"><span class="s2">oasisfinancial.com</span></a>. Don’t hesitate to contact us with other questions. </span><span class="s3">Use the simple form below, <a class="toolti color_or" data-original-title="(866) 523-1323" href="tel:866.523.1323">call us</a>, or <a class="color_or" href="">start a chat</a>. Our friendly team is happy to help!</span></p>
                    
                    <div class="contact-form col-default gform_wrapper shadow mt-4">
                        <div class="appointment-col">
                            <form method='post' enctype='multipart/form-data' id='gform_1' action='/#gf_1'>
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
                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">Please contact me about<span class='text-danger'>*</span></label>
                                                <select name="contact_about" class="form-control">
                                                    <option value="">Select One</option>
                                                    <option value="Applying for money">Applying for money</option>
                                                    <option value="Status of my application">Status of my application</option>
                                                    <option value="Requesting additional money">Requesting additional money</option>
                                                    <option value="My payoff">My payoff</option>
                                                    <option value="Structured settlements">Structured settlements</option>
                                                    <option value="Inheritance funding">Inheritance funding</option>
                                                    <option value="Questions about Oasis">Questions about Oasis</option>
                                                    <option value="Media inquiries">Media inquiries</option>
                                                    <option value="Seeking an attorney">Seeking an attorney</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
                                            <div class="form-group">
                                                <label class="gfield_label" for="exampleFormControlInput1">What state is your case in?<span class='text-danger'>*</span></label>
                                                <select name="state_case" class="form-control" style="margin-bottom:0px">
                                                    <option value="">Select One</option>
                                                    <option value="Alabama">Alabama</option>
                                                    <option value="Alaska">Alaska</option>
                                                    <option value="Arizona">Arizona</option>
                                                    <option value="Arkansas">Arkansas</option>
                                                    <option value="California">California</option>
                                                    <option value="Colorado">Colorado</option>
                                                    <option value="Connecticut">Connecticut</option>
                                                    <option value="Delaware">Delaware</option>
                                                    <option value="District of Columbia">District of Columbia</option>
                                                    <option value="Florida">Florida</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Hawaii">Hawaii</option>
                                                    <option value="Idaho">Idaho</option>
                                                    <option value="Illinois">Illinois</option>
                                                    <option value="Indiana">Indiana</option>
                                                    <option value="Iowa">Iowa</option>
                                                    <option value="Kansas">Kansas</option>
                                                    <option value="Kentucky">Kentucky</option>
                                                    <option value="Louisiana">Louisiana</option>
                                                    <option value="Maine">Maine</option>
                                                    <option value="Maryland">Maryland</option>
                                                    <option value="Massachusetts">Massachusetts</option>
                                                    <option value="Michigan">Michigan</option>
                                                    <option value="Minnesota">Minnesota</option>
                                                    <option value="Mississippi">Mississippi</option>
                                                    <option value="Missouri">Missouri</option>
                                                    <option value="Montana">Montana</option>
                                                    <option value="Nebraska">Nebraska</option>
                                                    <option value="Nevada">Nevada</option>
                                                    <option value="New Hampshire">New Hampshire</option>
                                                    <option value="New Jersey">New Jersey</option>
                                                    <option value="New Mexico">New Mexico</option>
                                                    <option value="New York">New York</option>
                                                    <option value="North Carolina">North Carolina</option>
                                                    <option value="North Dakota">North Dakota</option>
                                                    <option value="Ohio">Ohio</option>
                                                    <option value="Oklahoma">Oklahoma</option>
                                                    <option value="Oregon">Oregon</option>
                                                    <option value="Pennsylvania">Pennsylvania</option>
                                                    <option value="Rhode Island">Rhode Island</option>
                                                    <option value="South Carolina">South Carolina</option>
                                                    <option value="South Dakota">South Dakota</option>
                                                    <option value="Tennessee">Tennessee</option>
                                                    <option value="Texas">Texas</option>
                                                    <option value="Utah">Utah</option>
                                                    <option value="Vermont">Vermont</option>
                                                    <option value="Virginia">Virginia</option>
                                                    <option value="Washington">Washington</option>
                                                    <option value="West Virginia">West Virginia</option>
                                                    <option value="Wisconsin">Wisconsin</option>
                                                    <option value="Wyoming">Wyoming</option>
                                                    <option value="Armed Forces Americas">Armed Forces Americas</option>
                                                    <option value="Armed Forces Europe">Armed Forces Europe</option>
                                                    <option value="Armed Forces Pacific">Armed Forces Pacific</option>
                                                </select>
                                                <small class="form-text text-muted" style="font-size: 9px; text-align: initial">View Oasis Financial’s <a class="color_or" href="" target="_blank">state-specific licenses</a>, including South Carolina.</small>
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
                                            <button class="btn btn-default simple-btn" type="submit">Continue <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </form>

                            
                        </div>
                    </div>
                    <div class="contact_info">
                        <h3>Call Oasis!</h3>
                        <p class="p1"><span class="s1">Apply for funding<a class="text-secondary" href="https://www.oasisfinancial.com/es/complete-su-solicitud/#"><small>&nbsp;</small></a><small><a class="color_or" href="tel:877.333.6680">(877) 333-6680</a></small></span></p>
                        <p class="p1"><span class="s1">Check on your application </span><span class="s2"><a class="color_or" href="tel:866.769.3064">866.769.3064</a></span></p>
                    </div>
                    <div class="contact_info">
                        <h3>Media Inquiries</h3>
                        <p class="p2"><span class="s1">Please select <b>Media Inquiries</b> in the form’s dropdown menu.<br> </span></p>
                    </div>
                    <div class="contact_info">
                        <h3>Corporate Headquarters</h3>
                        <p class="p2"><span class="s1">Oasis Financial<br> <a class="color_or" href="https://goo.gl/maps/85aQR1JagZT2" target="_blank" rel="noopener">9525 West Bryn Mawr Avenue, Suite 900<br> Rosemont, Illinois 60018</a></span></p>
                        <p class="p2"><span class="s1">With regional offices located throughout the U.S.</span></p>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection