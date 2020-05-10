<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | advantage-lending.com</title>
    @include('site.include.header-footer.header')
    @yield('css')
</head>
<body>
    <!-- Preloader -->
    <div id="preloader"></div>
    @include('site.include.header-footer.nav')
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
    @yield('content')
    @include('site.include.header-footer.footer')
    @include('site.include.header-footer.footerjs')
    @yield('js')
</body>
</html>