@extends('site.layout.master')
@section('title','State-Specific Licenses')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/statespecificlicenses/'.$licenses->background_image)}}");
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
    .licenses p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .licenses ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
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
    .licenses a{
        color: #FF741A;
    }
    .licenses h2{
        margin-bottom: .5rem;
        font-family: adelle,serif;
        font-weight: 700;
        line-height: 1.2;
        font-size: 4rem;
        color: #133d8d;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$licenses->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$licenses->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 60px">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 ">
                    <div class="licenses f-18">
                        {!!$licenses->page_content!!}
                    </div>
                 </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection