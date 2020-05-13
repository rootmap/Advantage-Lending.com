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