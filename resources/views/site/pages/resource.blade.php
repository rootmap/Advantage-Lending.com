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
</style>

@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">Resources</h3>
        </div>
    </section>
    <section class="faq-area" style="padding: 80px">
        <div class="container">
            <p class="p1"><span class="s1">Are you having difficulty in making ends meet? Trying to figure out what “pre-settlement funding” means or how it works? Check out the resources below for useful tips on how to protect your family and your finances. If you still have questions, feel free to </span><span class="s2">call</span><span class="s1"> or <a class="color_or" href="{{url('contactus')}}"><span class="s2">contact us</span></a> and we’ll do our best to get you the answers that you are looking for. Better Days Start Today!</span></p>
            <div class="row resource-info">
                <div class="col-md-3">
                   <section>
                      <a href="{{url('resource-details')}}"><img width="960" height="640" src="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg" class="attachment-team size-team wp-post-image" alt="" srcset="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg 960w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-300x200.jpg 300w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-768x512.jpg 768w" sizes="(max-width: 960px) 100vw, 960px"></a>                            
                   </section>
                </div>
                <div class="col-md-9 resource">
                <h3><a class="color_or" href="{{url('resource-details')}}">
                      A Paralegal’s Guide to Plaintiff Pre-Settlement Funding                                </a>
                   </h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem architecto iusto atque nostrum soluta officia perferendis? Commodi possimus repudiandae iure nulla? Earum repellendus unde voluptates magnam culpa nulla voluptate!…</p>
                   <p>
                      <a class="arrow-right mt-2 mb-md-4 mb-5" href="{{url('resource-details')}}">Learn more</a>
                   </p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row resource-info">
                <div class="col-md-3">
                   <section>
                      <a href="{{url('resource-details')}}"><img width="960" height="640" src="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg" class="attachment-team size-team wp-post-image" alt="" srcset="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg 960w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-300x200.jpg 300w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-768x512.jpg 768w" sizes="(max-width: 960px) 100vw, 960px"></a>                            
                   </section>
                </div>
                <div class="col-md-9 resource">
                <h3><a class="color_or" href="{{url('resource-details')}}">
                      A Paralegal’s Guide to Plaintiff Pre-Settlement Funding                                </a>
                   </h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem architecto iusto atque nostrum soluta officia perferendis? Commodi possimus repudiandae iure nulla? Earum repellendus unde voluptates magnam culpa nulla voluptate!…</p>
                   <p>
                      <a class="arrow-right mt-2 mb-md-4 mb-5" href="{{url('resource-details')}}">Learn more</a>
                   </p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row resource-info">
                <div class="col-md-3">
                   <section>
                      <a href="{{url('resource-details')}}"><img width="960" height="640" src="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg" class="attachment-team size-team wp-post-image" alt="" srcset="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg 960w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-300x200.jpg 300w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-768x512.jpg 768w" sizes="(max-width: 960px) 100vw, 960px"></a>                            
                   </section>
                </div>
                <div class="col-md-9 resource">
                <h3><a class="color_or" href="{{url('resource-details')}}">
                      A Paralegal’s Guide to Plaintiff Pre-Settlement Funding                                </a>
                   </h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem architecto iusto atque nostrum soluta officia perferendis? Commodi possimus repudiandae iure nulla? Earum repellendus unde voluptates magnam culpa nulla voluptate!…</p>
                   <p>
                      <a class="arrow-right mt-2 mb-md-4 mb-5" href="{{url('resource-details')}}">Learn more</a>
                   </p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="row resource-info">
                <div class="col-md-3">
                   <section>
                      <a href="{{url('resource-details')}}"><img width="960" height="640" src="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg" class="attachment-team size-team wp-post-image" alt="" srcset="https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide.jpg 960w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-300x200.jpg 300w, https://www.oasisfinancial.com/wp-content/uploads/2020/03/Paralegals-Guide-768x512.jpg 768w" sizes="(max-width: 960px) 100vw, 960px"></a>                            
                   </section>
                </div>
                <div class="col-md-9 resource">
                <h3><a class="color_or" href="{{url('resource-details')}}">
                      A Paralegal’s Guide to Plaintiff Pre-Settlement Funding                                </a>
                   </h3>
                   <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa dolorem architecto iusto atque nostrum soluta officia perferendis? Commodi possimus repudiandae iure nulla? Earum repellendus unde voluptates magnam culpa nulla voluptate!…</p>
                   <p>
                      <a class="arrow-right mt-2 mb-md-4 mb-5" href="{{url('resource-details')}}">Learn more</a>
                   </p>
                </div>
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
        </div>
        
    </section>
@endsection
@section('js')
    
@endsection