@extends('site.layout.master')
@section('title','How It Works')
@section('css')
    <style type="text/css">
        .innerpage-titlebar {
            padding: 80px 0 80px;
            position: relative;
            background: url('{{asset('module/images/extra/What-can-I-do-for-you_-590052924_6248x4912.jpeg')}}');
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
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
        
    </style>
@endsection
@section('content')
    <!-- Inner Page title Start -->
    <section class="innerpage-titlebar">
        <div class="container">
            <h3 class="fix-barcum-head">How it Works</h3>
        </div>
    </section>

    <!-- Appointment Start -->
    <section class="about-area" id="appointment" style="padding:60px 0 60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="about-col text-center">
                        <h1 id="getstarted" class="separator-center">Don’t Settle for Less</h1>
                        <p>There is a lot of terminology used in referring to pre-settlement and personal injury cases. The below glossary of terms and phrases is meant to provide some clarification around what each means and how they relate to the products and services offered by Oasis Financial.</p>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 fw600 ">
                    <div class="service-col-two serviceHoberBox wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>1. You Apply</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>All you have to do is fill out the form on our website, but don’t worry, you are under no obligation by doing so. Simply begin by providing your name and contact information; the name of the law firm that’s handling your case; your lawyer’s name; and the law firm’s telephone number.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>2. We Review</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>We’ll evaluate your application as it is submitted. We’ll also consult with your attorney. To facilitate this part of the process, we’ll only ask him or her to provide key documents necessary to help us assess your case.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>3. We Pay</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>If we determine that you qualify for pre-settlement funding, we’ll provide cash from your final settlement. Qualified applicants generally receive $500 to $100,000, sometimes within 24 hours after approval.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6 fw600">
                    <div class="service-col-two wow bounceInLeft" data-wow-duration="1s" data-wow-delay="0s">
                        <div class="service-two-content text-center">
                            <img class="img-responsive" style="width:10rem; margin: 0 auto; padding-top:20px;" src="{{asset('module/svg/people.svg')}}" alt="">
                        </div>
                        <div class="service-two-content text-center" style="padding: 0 20px;">
                            <h3>4. You Benefit</h3>
                            <div class="heading-under-line-full"></div>
                        </div>
                        <div class="service-two-content">
                            <p>You can use your money to cover routine expenses or costs stemming from your injury/injuries. It’s as simple as that. Oasis Financial helps you get cash quickly when you need it the most. With this peace of mind, you can concentrate on your recovery.</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <a class="btn btn-default simple-btn" title="Apply Now" href="service-details.html"><i class="fa fa-file-text-o" aria-hidden="true"></i> Apply Now</a>
                </div>   
                
            </div>
        </div>
    </section>

    <!-- About Three start -->
    <section class="about-area about-area-three">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/about/2.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="about-three-col">
                       <h3>Our Mission</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae quas officia reiciendis aut totam.</p>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                   <div class="about-three-col">
                       <h3>Our Vision</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae quas officia reiciendis aut totam.</p>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/about/3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="about-three-col">
                        <img src="images/about/4.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                   <div class="about-three-col">
                       <h3>Our Responsibility</h3>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, dolores, blanditiis. Ex animi rerum tempora possimus soluta accusantium incidunt at, quidem voluptatem. Perspiciatis placeat dolor temporibus vero itaque tenetur expedita, ad harum saepe facilis, qui vitae iure accusantium nulla labore. Aliquid deleniti quam, aspernatur quia expedita nobis, atque sunt beatae iure odio explicabo sed rerum odit magnam vel quidem vero voluptatibus. Sed molestiae quas officia reiciendis aut totam.</p>
                   </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator Start -->
    <section class="separator-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="separator-col">
                        <h2>please feel free to contact us</h2>
                        <h4><span>Hotline:</span> +001-111-222-3344</h4>
                        <h4><span>Mail Address:</span> yourmail@gmail.com</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Start -->
    <section class="counter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                    <div class="counter-box">
                        <div class="counter-icon"><i class="icofont icofont-files"></i>
                        </div>
                        <div class="counter-item counter">5890</div>
                        <div class="counter-title">
                            <h4>completed jobs</h4>
                        </div>
                    </div>
                    <!--counter-box-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                    <div class="counter-box">
                        <div class="counter-icon"><i class="icofont icofont-businessman"></i>
                        </div>
                        <div class="counter-item counter">5830</div>
                        <div class="counter-title">
                            <h4>Happy client</h4>
                        </div>
                    </div>
                    <!--counter-box-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                    <div class="counter-box">
                        <div class="counter-icon"><i class="icofont icofont-coins"></i>
                        </div>
                        <div class="counter-item counter">1856</div>
                        <div class="counter-title">
                            <h4>Our staff</h4>
                        </div>
                    </div>
                    <!--counter-box-->
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6 default-col">
                    <div class="counter-box">
                        <div class="counter-icon"><i class="icofont icofont-award"></i>
                        </div>
                        <div class="counter-item counter">145</div>
                        <div class="counter-title">
                            <h4>Awards</h4>
                        </div>
                    </div>
                    <!--counter-box-->
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section --> 
    <section class="testimonial-area bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="defult-title text-center">
                        <h1>What People <span>Says</span></h1>
                        <h5>consectetur adipisicing elit alias</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="testimonial-carousel">
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonial/1.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Tom Latham</a>
                                <span class="post">Web Developer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonial/2.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Merry Alvna</a>
                                <span class="post">Web Designer</span>
                            </div>
                        </div>
                        <div class="testimonial">
                            <div class="pic">
                                <img src="images/testimonial/3.jpg" alt="">
                            </div>
                            <p class="description">
                                There are many variations of passages of Lorem Ipsum available, but the majority majority have suffered alteration in some form, by injected humour. There are many variations of passages.
                            </p>
                            <div class="testimonial-content">
                                <a href="#" class="title">Keen Williamson</a>
                                <span class="post">PHP Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Client start -->
    <section class="client-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="client-carousel">
                        <div class="item">
                            <a href="#"><img src="images/client/1.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/client/2.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/client/3.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/client/4.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/client/5.jpg" alt=""></a>
                        </div>
                        <div class="item">
                            <a href="#"><img src="images/client/6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    
@endsection