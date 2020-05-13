@extends('site.layout.master')
@section('title','Terms of Use')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/termsofuse/'.$TermsOfUse->background_image)}}");
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
    .terms p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .terms ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
    }
    .terms-open{
        margin-top: 3.5rem;
        margin-bottom: 4.5rem;
        color: #000;
    }
    .terms-open h1{
        margin-bottom: 1.5rem;
        font-family: adelle,serif;
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 3px solid #FF741A;
    }
    .f-18 * {
        font-size: 1.5rem;
        text-align: justify
    }
    .terms a{
        color: #FF741A;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$TermsOfUse->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$TermsOfUse->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12">
                    <div class="terms">
                        <div class="f-18">
                            {!!$TermsOfUse->page_content!!}
                         </div>
                    </div>
                
                    
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection