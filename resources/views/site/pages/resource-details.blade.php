@extends('site.layout.master')
@section('title','Resources')
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
                        <img src="{{url('module/images/blog/big.jpg')}}" alt="">
                        </div>
                        <ul class="post-bar">
                            <li>Mar 08, 2018</li>
                        </ul>
                    </div>
                    <div class="blog-content">
                        <h2>Here Is The Blog Title</h2>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years. Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years.</p>
                        <div class="highlight-text">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.</p>
                        </div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint et suscipit officia esse laboriosam soluta illum molestiae repudiandae placeat similique reiciendis vel autem quod consequatur laborum impedit fuga voluptatem perferendis odit dicta distinctio, nobis necessitatibus. Inventore molestias cupiditate doloribus voluptatem commodi explicabo voluptatum, consequatur enim, qui illum dolores iusto rem eum doloremque voluptate fuga saepe odio impedit, nostrum nam? Voluptatibus esse impedit.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="sidebar">
                        <div class="sidebar-search">
                            <form method="post">
                                <div class="input-group">
                                    <input placeholder="Search Here....." class="form-control" name="search-field" type="text">
                                    <span class="input-group-btn">
                                  <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                  </span>
                                </div>
                            </form>
                        </div>
                        <div class="latest-news">
                            <h3 class="sedebar-title">latest Resources</h3>
                            <ul>
                                <li>
                                    <div class="news-item">
                                    <img src="{{url('module/images/blog/post-1.jpg')}}" alt="">
                                        <h4><a href="#">Lorem ipsum dolor sit, consectetur adipisicing.</a></h4>
                                        <p><a href="#">28 August, 2018</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="news-item">
                                        <img src="{{url('module/images/blog/post-2.jpg')}}" alt="">
                                        <h4><a href="#">Lorem ipsum dolor sit, consectetur adipisicing.</a></h4>
                                        <p><a href="#">28 August, 2018</a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="news-item">
                                        <img src="{{url('module/images/blog/post-3.jpg')}}" alt="">
                                        <h4><a href="#">Lorem ipsum dolor sit, consectetur adipisicing.</a></h4>
                                        <p><a href="#">28 August, 2018</a></p>
                                    </div>
                                </li>
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