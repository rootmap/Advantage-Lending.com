<header class="main-herader">
    <!-- Header topbar start -->
    <div class="header-topbar center991">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="herader-topbar-col tobar-leftside">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="after-bdr">{{$site->contact_number}}</span>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>{{$site->email}}</span>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="herader-topbar-col tobar-rightside center991">
                        <span class="ml0-991">{{$site->top_toll_free_call_message}}</span>
                        {{-- <span class="after-bdr ml0-991"><a href="account.html">Contact Us</a></span> --}}
                        {{-- <span class="ml0">
                            <span class="s-icon ml0">
                                <a href="#" id="addClass"><span class="glyphicon glyphicon-search"></span></a>
                            </span>
                        </span> --}}
                        <p><a href="{{Request::path() == '/' ? '#appointment' :url('/').'#appointment'}}" id="scroll"><span>{{$site->top_apply_button_text}}</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header navbar start -->
    <div class="header-navbar fixed-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('upload/sitesetting/'.$site->top_logo)}}" alt="">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInUp">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{url('/')}}">Home</a></li>
                                <li class="{{ Request::path() == 'how-it-works' ? 'active' : '' }}"><a href="{{url('how-it-works')}}">How It Works</a></li>
                                <li class="{{ Request::path() == 'types-of-funding' ? 'active' : '' }}"><a href="{{url('types-of-funding')}}">Types Of Funding</a></li>
                                <li class="{{ Request::path() == 'about-advantage-lending' ? 'active' : '' }}"><a href="{{url('about-advantage-lending')}}">About A.L.</a></li>
                                <li class="{{ Request::path() == 'faq' ? 'active' : '' }}"><a href="{{url('faq')}}">Faq</a></li>
                                <li class="{{ Request::path() == 'for-attorneys' ? 'active' : '' }}"><a href="{{url('for-attorneys')}}">For Attorneys</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>