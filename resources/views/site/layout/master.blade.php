<?php 
$site=CoreCustomController::SiteSetting();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | {{$site->site_title}} | advantage-lending.com</title>
    @include('site.include.header-footer.header',compact('site'))
    @yield('css')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    @include('site.include.header-footer.nav',compact('site'))
    <!-- Popup Search Area -->
    {{-- <div id="qnimate" class="off">
        <div id="search" class="open">
        <button data-widget="remove" id="removeClass" class="close" type="button">×</button>
        <form>
            <input type="text" placeholder="Type search keywords here" value="" name="term" id="term">
            <button class="btn btn-lg btn-site" type="submit"><span class="glyphicon glyphicon-search"></span> Search</button>
        </form>
        </div>
    </div> --}}
        @if($site->module_status=="Active")
            @yield('content')
        @else
                <!-- Separator Start -->
                <section class="separator-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="separator-col">
                                    <div class="col-md-10">
                                        <div class="defult-title text-center bl-none" style="padding-bottom: 50px;">
                                            <h1 class="mb-2 text-white"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Our Site is <span>Offline</span></h1>
                                        </div>
                                        <h2>We are sorry for your inconvenience <i class="fa fa-cog fa-spin"></i></h2>
                                        <p class="text-white">We are running some upgradation, Please come back few minutes later.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> 
        @endif

    @include('site.include.header-footer.footer',compact('site'))
    @include('site.include.header-footer.footerjs')
    <style type="text/css">
        .heightNone{
            height: 0px !important;
            overflow: hidden;
        }
    </style>

    @yield('js')
    <script>
        $(document).find('section:eq(0)').css("margin-top","-40px;");
        $(document).find('.fix-barcum-head').css("z-index","11");
        
        // $(window).bind('mousewheel', function(event) {
        //     if (event.originalEvent.wheelDelta >= 0) {
               
        //     }
        //     else {
        //         $(document).find('.header-topbar').fadeOut();
        //         $(document).find('.header-topbar').fadeIn();
        //     }
        // });
        var fadeIN = 0;
        $(window).on("scroll", function() {
            var scrollPos = $(window).scrollTop();
            

            if (scrollPos <= 0) {
                fadeIN = 0;
                //$(document).find('.header-topbar').fadeOut();
            } else {
                if(fadeIN==0)
                {
                    $(document).find('.header-topbar').fadeOut('slow');
                    $(document).find('.header-topbar').addClass('heightNone');
                    
                    fadeIN = 1;

                }
                setTimeout(() => {
                    
                    $(document).find('.header-topbar').removeClass('heightNone');
                    $(document).find('.header-topbar').fadeIn('slow');
                }, 500);
               
            }
        });
    </script>
</body>
</html>