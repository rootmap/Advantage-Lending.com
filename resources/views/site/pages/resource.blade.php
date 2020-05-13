@extends('site.layout.master')
@section('title','Resources')
@section('css')
<style type="text/css">
    .innerpage-titlebar {
        padding: 80px 0 80px;
        position: relative;
        background: url("{{asset('upload/resourcepagesetting/'.$ResourceContentInfo->background_image)}}");
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
    
    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 3px solid #007db3;
    }
    a.arrow-right {
        color: #bc560b;
        border-color: #bc560b;
    }
    a.arrow-right {
        display: inline-block;
        background-image: url({{url('module/images/arrow.svg')}});
        background-repeat: no-repeat;
        background-position: right 7px;
        padding-right: 2.5rem;
        font-weight: 600;
        font-size: 18px;
        padding-bottom: .5rem;
        border-bottom: solid 2px #f47820;
        -webkit-transition: all linear .15s;
        transition: all linear .15s;
    }
    .mb-5, .my-5 {
        margin-bottom: 3rem !important;
    }
    .mt-2, .my-2 {
        margin-top: .5rem !important;
    }
    .resource-info{
        margin-top: 4rem;
    }
     p{
        color: #000;
    }
    .resource p{
        color: #000;
    }
    .resource h3:hover{
        text-decoration: underline;
    }
    .resource-info a{
        color: #FF741A;
    }
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar"  style="--my-innerpage-titlebar-color:{{$ResourceContentInfo->background_forecolor}}; ">
        <div class="container">
            <h3 class="fix-barcum-head">{{$ResourceContentInfo->title}}</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 80px">
        <div class="container">
            <div class="resource-info">
                {!!$ResourceContentInfo->detail!!}
            </div>
            @isset($ResourceContent)
                @foreach ($ResourceContent as $item)
                <?php
                    $title = str_replace(" ","-",$item->title);
                ?>
                    <div class="row resource-info">
                        <div class="col-md-3">
                        <section>
                            <a href="{{url('resource-details/'.$item->id.'/'.$title)}}">
                                <img width="960" height="640" src="{{url('upload/resourcecontent/'.$item->image)}}" class="attachment-team size-team wp-post-image" alt="" srcset="{{url('upload/resourcecontent/'.$item->image)}} 960w, {{url('upload/resourcecontent/'.$item->image)}} 300w, {{url('upload/resourcecontent/'.$item->image)}} 768w" sizes="(max-width: 960px) 100vw, 960px">
                            </a>                            
                        </section>
                        </div>
                        <div class="col-md-9 resource">
                        <h3>
                        <a class="color_or" href="{{url('resource-details/'.$item->id.'/'.$title)}}">{{$item->title}}</a>
                        </h3>
                        <p>{!!$item->short_detail!!}</p>
                        <p>
                            <a class="arrow-right mt-2 mb-md-4 mb-5" href="{{url('resource-details/'.$item->id.'/'.$title)}}">Learn more</a>
                        </p>
                        </div>
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                @endforeach
            @endisset
            
            
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection