@extends('site.layout.master')
@section('title','Careers')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/careerpagesetting/'.$CareerPage->background_image)}}");
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
    .carrer p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .carrer ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
    }
    .carrer-open{
        margin-top: 3.5rem;
        margin-bottom: 4.5rem;
        color: #000;
    }
    .carrer-open h1{
        margin-bottom: 1.5rem;
        font-family: adelle,serif;
        font-weight: 700;
        line-height: 1.2;
        color: #FF741A;
    }
    hr {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        border: 0;
        border-top: 3px solid #FF741A;
    }
    hr:last-child {
        display: none;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start --> 
    <section class="innerpage-titlebar" style="--my-innerpage-titlebar-color:{{$CareerPage->background_forecolor}}">
        <div class="container">
            <h3 class="fix-barcum-head">{{$CareerPage->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 40px">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-offset-2 col-sm-12">
                    <div class="carrer">
                        {!!$CareerPage->page_detail!!}
                    </div>
                    <div class="carrer-open">
                        <h1>{{$CareerPage->page_job_title}}</h1>
                        @isset($CareerPost)
                            @foreach ($CareerPost as $item)
                                <p><b>{{$item->career_title}} &nbsp;</b>{!!$item->career_detail!!} <a class="color_or" href="{{$item->career_link_url}}" target="_blank" rel="noopener noreferrer">{{$item->career_link_text}}</a></p>
                            <hr>
                            @endforeach
                        @endisset
                    </div>
                    
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection