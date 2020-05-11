@extends('site.layout.master')
@section('title','Broker Partnerships')
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
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">For Attorneys</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="for-brokers">
                        <h2 class="h2 separator-left">The Industry Leader in Consumer Legal Funding</h2>
                        <p>When you’re looking for a reliable funding resource for your legal network, there’s no better partner than Oasis.</p>
                        <p>With Oasis as a funding partner, you can count on financial liquidity to fund your clients. We’re the largest U.S. company focusing on pre-settlement funding. Our deep financial resources mean we can directly fund qualified plaintiffs up to $100,000.</p>
                        <h1>Favorable Terms</h1>
                        <p>Oasis offers favorable terms, with competitive broker commissions and flexible payment structures, plus reasonable rates to plaintiffs. And e-signatures and secure transfers mean transactions are finalized quickly.</p>
                        <h1>On-staff Underwriters</h1>
                        <p>You’ll find it easy to work with our internal underwriting department, who can approve requests quickly – as little as two hours – and provide complete and accurate reports on all your submissions.</p>
                        <p>More than 10,000 attorneys work with Oasis each year, and we’ve funded more than 250,000 satisfied clients. Let us help your clients too.</p>
                    </div>
                    <div class="for-brokers-clint">
                        <h1>Crystal Jones</h1>
                        <p>
                            <a class="color_or" href="tel:866.353.1963" target="_blank" rel="noopener"><i class="fa fa-phone"></i> (866) 353-1963 </a>toll free<br> 
                            <a class="color_or" href="mailto:"><i class="fa fa-envelope"></i> crjones@oasisfinancial.com</a>
                        </p>
                    </div>
                    <div class="for-brokers-clint">
                        <h1>Dave Ahrens</h1>
                        <p>
                            <a class="color_or" href="tel:866.353.1963" target="_blank" rel="noopener"><i class="fa fa-phone"></i> (866) 353-1963 </a>toll free<br> 
                            <a class="color_or" href="mailto:"><i class="fa fa-envelope"></i> crjones@oasisfinancial.com</a>
                        </p>
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
                        <h1 id="getstarted" class="color_blue">Work with Oasis</h1>
                        <p>Looking for more information about a broker relationship with Oasis? Contact us below or toll-free at <a class="color_or" href="tel:877.333.6680">(877) 333-6680</a>.</p>
                        <p>Note: Oasis does not work with brokers in the state of Missouri.</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="appointment-col">
                        <form method="post" enctype="multipart/form-data" id="gform_1" action="/#gf_1">
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
                                                <input type="text" class="form-control" autocomplete="off" name="law_firm_name" id="exampleFormControlInput1">
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