
<footer class="main-footer" style=" --my-rootmap-fotter-color-first-back:#2f344e; --my-rootmap-fotter-color-second-back:#262a40;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12">
                <div class="footer-about-col mb50">
                    <div class="footer-logo">
                        <a href="#"><img class="img-responsive" src="{{asset('upload/sitesetting/'.$site->bottom_logo)}}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-md-offset-1 col-sm-12">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-post-col clearfix">
                            <ul>
                                <li>
                                    <a href="{{ url('how-it-works') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> How It Works
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('types-of-funding') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Types of Funding
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('about-advantage-lending') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('resource') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Resources
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-post-col clearfix">
                            <ul>
                                <li>
                                    <a href="{{ url('for-attorneys') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> For Attorneys
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('for-brokers') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> For Brokers
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('faq') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> FAQ 
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('contact-us') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="footer-post-col clearfix">
                            <ul>
                                <li>
                                    <a href="{{ url('careers') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Careers
                                    </a>
                                </li>
                                <li>
                                    <a href="{{url('terms-of-use')}}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Terms of Use
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('privacy-policy') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> Privacy Policy
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="footer-post-col mb50 clearfix">
                            <ul>
                                <li>
                                    <a href="{{ url('state-specific-licenses') }}" class="footer-menu-link">
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i> State-specific Licenses
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <div class="row mb50">
                    <div class="col-md-6 col-lg-6 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="{{asset('module/images/extra/digicert-reviews1-1.png')}}" />
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="{{asset('module/images/extra/WU_LOGO_PRIM_ST_R_BL_RGB-1.png')}}" />
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="{{asset('module/images/extra/ARC-LOGO-PNG_WHT.png')}}" />
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-3 col-xs-3">
                        <img class="img-responsive" src="{{asset('module/images/extra/BBB-A-rating.png')}}" />
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Copyright start from here -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="copyright-col">
                    <ul class="social center991">
                        @if(!empty($site->facebook_page_link))
                            <li><a href="{{$site->facebook_page_link}}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        @endif
                        @if(!empty($site->twitter_page_link))
                        <li><a href="{{$site->twitter_page_link}}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        @endif
                        @if(!empty($site->linkedin_page_link))
                        <li><a href="{{$site->linkedin_page_link}}" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        @endif
                        @if(!empty($site->youtube_page_link))
                        <li><a href="{{$site->youtube_page_link}}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        @endif
                        @if(!empty($site->google_plus_page_link))
                        <li><a href="{{$site->google_plus_page_link}}" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="copyright-col text-right center991">
                    <p>Copyright ©2020 |  All Rights Reserved <a href="http://neutrix.co" target="_blank">Neutrix.Systems</a></p>
                </div>
            </div>
        </div>
    </div>
</div>