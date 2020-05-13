<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{ url('admin/dist/img/AdminLTELogo.png') }}"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{url('crud')}}" class="nav-link {{ Request::path() == 'crud' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>CRUD</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link {{ Request::path() == 'dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-igloo"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('slider','howwehelp','betterdaysstart','fundingneedpagecontent','fundingyouneed','youarenotalone','youarenotalonevideo','helponmanycase','helponmanycasetypes','neversettleforless','glossarysectioncontent','glossary'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('slider','howwehelp','betterdaysstart','fundingneedpagecontent','fundingyouneed','youarenotalone','youarenotalonevideo','helponmanycase','helponmanycasetypes','neversettleforless','glossarysectioncontent','glossary'))?'active':'' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('slider')}}" class="nav-link {{ Request::path() == 'slider' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('howwehelp')}}" class="nav-link {{ Request::path() == 'howwehelp' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>How We Help</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('betterdaysstart')}}" class="nav-link {{ Request::path() == 'betterdaysstart' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Better Days Start</p>
                </a>
              </li>
              <li class="nav-item has-treeview  {{ in_array(Request::path(),array('fundingneedpagecontent','fundingyouneed'))?'menu-open':'' }}">
                <a href="javascript:void(0);" class="nav-link  {{ in_array(Request::path(),array('fundingneedpagecontent','fundingyouneed'))?'active':'' }}">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                    Funding You Need Now
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('fundingneedpagecontent')}}" class="nav-link {{ Request::path() == 'fundingneedpagecontent' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Page Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('fundingyouneed')}}" class="nav-link {{ Request::path() == 'fundingyouneed' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Funding You Need Block</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview  {{ in_array(Request::path(),array('youarenotalone','youarenotalonevideo'))?'menu-open':'' }}">
                <a href="javascript:void(0);" class="nav-link  {{ in_array(Request::path(),array('youarenotalone','youarenotalonevideo'))?'active':'' }}">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                    You Are Not Alone
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('youarenotalone')}}" class="nav-link {{ Request::path() == 'youarenotalone' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Page Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('youarenotalonevideo')}}" class="nav-link {{ Request::path() == 'youarenotalonevideo' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Video Contents</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview  {{ in_array(Request::path(),array('helponmanycase','helponmanycasetypes'))?'menu-open':'' }}">
                <a href="javascript:void(0);" class="nav-link  {{ in_array(Request::path(),array('helponmanycase','helponmanycasetypes'))?'active':'' }}">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                    Help On Many Case Types
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('helponmanycase')}}" class="nav-link {{ Request::path() == 'helponmanycase' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Page Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('helponmanycasetypes')}}" class="nav-link {{ Request::path() == 'helponmanycasetypes' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Case Type Data</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{url('neversettleforless')}}" class="nav-link {{ Request::path() == 'neversettleforless' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Never Settle For Less</p>
                </a>
              </li>
              
              <li class="nav-item has-treeview  {{ in_array(Request::path(),array('glossarysectioncontent','glossary'))?'menu-open':'' }}">
                <a href="javascript:void(0);" class="nav-link  {{ in_array(Request::path(),array('glossarysectioncontent','glossary'))?'active':'' }}">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                    Glossary
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('glossarysectioncontent')}}" class="nav-link {{ Request::path() == 'glossarysectioncontent' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Page Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('glossary')}}" class="nav-link {{ Request::path() == 'glossary' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Case Type Data</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('howitworkspagesetting','howitworksdonotsettleforless','howitworkcaseswefund','howitworksecuringthemoney','howitworksdonotsettlestep'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('howitworkspagesetting','howitworksdonotsettleforless','howitworkcaseswefund','howitworksecuringthemoney','howitworksdonotsettlestep'))?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                How It Works
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('howitworkspagesetting')}}" class="nav-link {{ Request::path() == 'howitworkspagesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Settings</p>
                </a>
              </li>
              <li class="nav-item has-treeview  {{ in_array(Request::path(),array('howitworksdonotsettleforless','howitworksdonotsettlestep'))?'menu-open':'' }}">
                <a href="javascript:void(0);" class="nav-link  {{ in_array(Request::path(),array('howitworksdonotsettleforless','howitworksdonotsettlestep'))?'active':'' }}">
                  <i class="nav-icon fas fa-bars"></i>
                  <p>
                    Do Not Settle For Less
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('howitworksdonotsettleforless')}}" class="nav-link {{ Request::path() == 'howitworksdonotsettleforless' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Heading Content</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('howitworksdonotsettlestep')}}" class="nav-link {{ Request::path() == 'howitworksdonotsettlestep' ? 'active' : '' }}">
                      <i class="fas fa-minus-square nav-icon"></i>
                      <p>Set Steps Content</p>
                    </a>
                  </li>
                  
                </ul>
              </li>
              <li class="nav-item">
                <a href="{{url('howitworkcaseswefund')}}" class="nav-link {{ Request::path() == 'howitworkcaseswefund' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Case We Fund</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('howitworksecuringthemoney')}}" class="nav-link {{ Request::path() == 'howitworksecuringthemoney' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Securing Money Content</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('typeoffundpage','typesoffundingpresettlement','fundingform','typesoffundcaseswefundtype'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('typeoffundpage','typesoffundingpresettlement','fundingform','typesoffundcaseswefundtype'))?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                Types Of Funding Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('typeoffundpage')}}" class="nav-link {{ Request::path() == 'typeoffundpage' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('typesoffundingpresettlement')}}" class="nav-link {{ Request::path() == 'typesoffundingpresettlement' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pre-settlement Funding</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('fundingform')}}" class="nav-link {{ Request::path() == 'fundingform' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Funding Forms</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('typesoffundcaseswefundtype')}}" class="nav-link {{ Request::path() == 'typesoffundcaseswefundtype' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Case We Fund Type</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('aboutpagesetting','aboutmilestones','meetleadersetting','teammember'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('aboutpagesetting','aboutmilestones','meetleadersetting','teammember'))?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                About Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('aboutpagesetting')}}" class="nav-link {{ Request::path() == 'aboutpagesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('aboutmilestones')}}" class="nav-link {{ Request::path() == 'aboutmilestones' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Milestones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('meetleadersetting')}}" class="nav-link {{ Request::path() == 'meetleadersetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Meet Leader Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('teammember')}}" class="nav-link {{ Request::path() == 'teammember' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team Members</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('faqpagesetting','package/create'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('faqpagesetting','package/create'))?'active':'' }}">
              <i class="nav-icon fas fa-book-open"></i>
              <p>
                FAQ Page
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('faqpagesetting')}}" class="nav-link {{ Request::path() == 'faqpagesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('hardwarepackage')}}" class="nav-link {{ Request::path() == 'package' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hardware List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('purchasehardware/create')}}" class="nav-link {{ Request::path() == 'package/create' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase New Hardware</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('purchasehardware')}}" class="nav-link {{ Request::path() == 'package' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Purchase Hardware List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('retail','powerfulcapabilities','whatmakesbetter','couldboostprofitability','systemeasytouse','multipleemployeesaccess'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('retail','powerfulcapabilities','whatmakesbetter','couldboostprofitability','systemeasytouse','multipleemployeesaccess'))?'active':'' }}">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Question
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('retail')}}" class="nav-link {{ Request::path() == 'retail' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Retail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('powerfulcapabilities')}}" class="nav-link {{ Request::path() == 'powerfulcapabilities' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Powerful Capabilities</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('whatmakesbetter')}}" class="nav-link {{ Request::path() == 'whatmakesbetter' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>What Makes Better </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('couldboostprofitability')}}" class="nav-link {{ Request::path() == 'couldboostprofitability' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Could Boost Profitability </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('systemeasytouse')}}" class="nav-link {{ Request::path() == 'systemeasytouse' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>System Easy to Use </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('multipleemployeesaccess')}}" class="nav-link {{ Request::path() == 'multipleemployeesaccess' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Multiple Employees Access</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('businesspossystem','coresoftwarecomponents','corehardwarecomponents'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('businesspossystem','coresoftwarecomponents','corehardwarecomponents'))?'active':'' }}">
              <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                Business POS System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('businesspossystem')}}" class="nav-link {{ Request::path() == 'businesspossystem' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modify Business POS </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('coresoftwarecomponents')}}" class="nav-link {{ Request::path() == 'coresoftwarecomponents' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Core Software Components</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('corehardwarecomponents')}}" class="nav-link {{ Request::path() == 'corehardwarecomponents' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Core Hardware Components</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('simplecashregister'))?'menu-open':'' }}">
            <a href="{{url('simplecashregister')}}" class="nav-link {{ in_array(Request::path(),array('simplecashregister'))?'active':'' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Simple Cash Register
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('privacypolicypage','termsofuse','statespecificlicenses'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('privacypolicypage','termsofuse','statespecificlicenses'))?'active':'' }}">
              <i class="nav-icon fas fa-images"></i>
              <p>
                Other Pages Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('privacypolicypage')}}" class="nav-link {{ Request::path() == 'privacypolicypage' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Privacy Policy</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('termsofuse')}}" class="nav-link {{ Request::path() == 'termsofuse' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Terms of use</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('statespecificlicenses')}}" class="nav-link {{ Request::path() == 'statespecificlicenses' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>State-Specific Licenses</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item has-treeview {{ in_array(Request::path(),array('resourcepagesetting','resourcecontent'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('resourcepagesetting','resourcecontent'))?'active':'' }}">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Resource
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('resourcepagesetting')}}" class="nav-link {{ Request::path() == 'resourcepagesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Settings</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('resourcecontent')}}" class="nav-link {{ Request::path() == 'resourcecontent' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Resource Content</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{url('contactusrequest')}}" class="nav-link {{ Request::path() == 'contactusrequest' ? 'active' : '' }}">
              <i class="nav-icon fas fa-phone-square-alt"></i>
              <p>Contact</p>
            </a>
          </li>
          <li class="nav-item has-treeview {{ in_array(Request::path(),array('sitesetting','pagesetting','cardpointestoresetting','websitesettings/create'))?'menu-open':'' }}">
            <a href="#" class="nav-link {{ in_array(Request::path(),array('sitesetting','pagesetting','cardpointestoresetting','websitesettings/create'))?'active':'' }}">
              <i class="nav-icon fas fa-cogs"></i>
              <p>
                Setting
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('sitesetting')}}" class="nav-link {{ Request::path() == 'sitesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Site Setting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('pagesetting')}}" class="nav-link {{ Request::path() == 'pagesetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Page Setting</p>
                </a>
              </li>              
              <li class="nav-item">
                <a href="{{url('cardpointestoresetting')}}" class="nav-link {{ Request::path() == 'cardpointestoresetting' ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cardpointe Store Setting</p>
                </a>
              </li>
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

    {{-- ============================================ --}}
    <div class="side-bar-bottom">
        <ul class="list-unstyled">
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Edit Profile"><a
              href="#"><i class="fas fa-cog"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Change Password"><a
              href="#"><i class="fas fa-key"></i></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Lockscreen"><a
              href="#"><i class="fas fa-unlock"></i></a></li>
          <li class="list-inline-item" data-toggle="tooltip" data-html="true" title="Logout">
            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
          </li>
        </ul>
      </div><!-- End side-bar-bottom -->
  </aside>

  <style type="text/css">
    .side-bar-bottom {
      width: 100%;
      height: 35px;
      background-color: #343a40;
      position: -webkit-sticky;
      position: sticky;
      bottom: 0px;
      margin-top: 93%;
      color: #cccccc;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      align-items: center;
      border-top: 2px solid #444a50;
      padding-top: 25px;
      /*-webkit-box-shadow: 0px 2px 5px 5px black;
      box-shadow: 0px 2px 5px 5px black;*/
  }
  .side-bar-bottom ul li a i{
    color: #fff;
    padding: 10px;
  }
  </style>