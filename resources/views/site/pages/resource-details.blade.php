@extends('site.layout.master')
@section('title',$details->title)
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
    .blog-content  p {
        margin-bottom: 1.5rem
    }
    .s1{
        color: #000;
    }
    .blog-content  ul li{
        list-style: square;
        color: #000;
        margin-left: 5rem
    }
    
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Resources</h3>
        </div>
    </section>
    <section class="blog-area blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-box">
                        <div class="blog-img">
                        <img src="{{url('upload/resourcecontent/'.$details->image)}}" alt="">
                        </div>
                        <ul class="post-bar">
                            <li>{{date('d M, Y', strtotime($details->created_at))}}</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <h2>{{$details->title}}</h2>
                        {!!$details->long_detail!!}   
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-search">
                            <form action="{{url('search')}}" method="post">
                                {!! csrf_field() !!}
                                <div class="input-group">
                                    <input placeholder="Search Here....." class="form-control" name="search_field" type="text">
                                    <span class="input-group-btn">
                                  <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                  </span>
                                </div>
                            </form>
                        </div>
                        <div class="latest-news">
                            <h3 class="sedebar-title">latest Resources</h3>
                            <ul>
                                @isset($ResourceContent)
                                @foreach ($ResourceContent as $item)
                                <?php
                                    $title = str_replace(" ","-",$item->title);
                                ?>
                                    <li>
                                        <div class="news-item">
                                        <img src="{{url('upload/resourcecontent/'.$item->image)}}" alt="">
                                            <h4><a href="{{url('resource-details/'.$item->id.'/'.$title)}}">{{$item->title}}</a></h4>
                                            <p><a href="{{url('resource-details/'.$item->id.'/'.$title)}}">{{date('d M, Y', strtotime($item->created_at))}}</a></p>
                                        </div>
                                    </li>
                                @endforeach
                                @endisset
                                
                                
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    
@endsection