<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
{{-- <div class="navbar-default sidebar " role="navigation">
  <div class="sidebar-nav slimscrollsidebar">
    <div class="sidebar-head">
      <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
    <ul class="nav" id="side-menu">
      <li class="user-pro">
        <a href="i.html" class="waves-effect" style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;" ><img style="height:36px;width:36px" onerror="this.src='https://placehold.it/128x128?text=No+Image'" src="{{ NetmaiestaClass::getAdminPath(TRUE) . '/thumb_' . session('aUser')->avatar }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{session('aUser')->name}}<span class="fa arrow"></span></span>
                    </a>
        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
          <li><a href="{{ route('profile') }}"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
          <li class="hidden"><a href="javascript:void(0)"><i class="ti-settings"></i> <span class="hide-menu">Account Setting</span></a></li>
          <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
        </ul>
      </li> --}}

      <div class="navbar-default sidebar " role="navigation">
        <div class="sidebar-nav slimscrollsidebar">
          <div class="sidebar-head">
            <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3> </div>
          <ul class="nav" id="side-menu">
            <li class="user-pro">
              <a href="i.html" class="waves-effect" style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
                <img style="height:36px;width:36px" onerror="this.src='https://placehold.it/128x128?text=No+Image'" src="{{ NetmaiestaClass::getAdminPath(TRUE) . '/thumb_' . session('aUser')->avatar }}" alt="user-img" class="img-circle">
                <span class="hide-menu"> {{session('aUser')->name}}<span class="fa arrow"></span></span>
              </a>
              <ul class="nav nav-second-level collapse" aria-expanded="false" >
                <li><a href="{{route('profile')}}"><i class="ti-user"></i> <span class="hide-menu">My Profile</span></a></li>
                <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
              </ul>
            </li>


      @php
        /*
        <li>
          <a href="index.html" class="waves-effect active">
            <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>
            <span class="hide-menu"> Dashboard <span class="fa arrow"></span>
              <span class="label label-rouded label-inverse pull-right">4</span>
            </span>
          </a>
          <ul class="nav nav-second-level">
            <li> <a href="index.html"><i class=" fa-fw">1</i><span class="hide-menu">Dashboard 1</span></a> </li>
            <li> <a href="index2.html"><i class=" fa-fw">2</i><span class="hide-menu">Dashboard 2</span></a> </li>
            <li> <a href="index3.html"><i class=" fa-fw">3</i><span class="hide-menu">Dashboard 3</span></a> </li>
          </ul>
        </li>
        */
      @endphp

      <li>
        <a href="{{url("dashboard")}}" class="waves-effect ">
          <i class="fa fa-dashboard fa-fw"></i>
          <span class="hide-menu"> Dashboard </span>
        </a>
      </li>

      @if (NetmaiestaClass::hasAccess('homepage'))
      <li class="">
        <a href="{{url("homepage")}}" class="waves-effect {{ (in_array('homepage', Request::segments())) ? 'active' : '' }}">
          <i class="fa fa-globe fa-fw"></i>
          <span class="hide-menu"> Homepage MGMT<span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{url("homepage-message")}}"><i class="fa fa-font fa-fw"></i><span class="hide-menu"> Welcome Message</span></a> </li>
          <li> <a href="{{url("homepage-slider")}}"><i class="fa fa-slideshare fa-fw"></i><span class="hide-menu"> Homepage Slider</span></a> </li>
        </ul>
      </li>
      <li class="devider"></li>
      @endif

      @if (NetmaiestaClass::hasAccess('admin'))
        <li>
          <a href="{{url("wms-admin")}}" class="waves-effect">
            <i class="fa fa-key fa-fw" data-icon="v"></i>
            <span class="hide-menu"> WPS Admin <span class="fa arrow"></span>
            </span>
          </a>
          <ul class="nav nav-second-level">
            <li> <a href="{{url("wms-admin")}}"><i class="fa fa-users fa-fw"></i><span class="hide-menu"> Admins</span></a> </li>
            <li> <a href="{{url("wms-admin/create")}}"><i class="fa fa-user-plus fa-fw"></i><span class="hide-menu"> Create Account</span></a> </li>
          </ul>
        </li>
        <li class="devider"></li>
      @endif

      @if (NetmaiestaClass::hasAccess('exec'))
      <li>
        <a href="{{route("exec.index")}}" class="waves-effect">
          <i  class="fa fa-podcast fa-fw"></i>
          <span class="hide-menu"> EXEC Committee <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{route("exec.index")}}"><i class="fa fa-eye fa-fw"></i><span class="hide-menu">View Committee</span></a> </li>
          <li> <a href="{{route("exec.create")}}"><i class="fa fa-plus fa-fw"></i><span class="hide-menu">Create Committee</span></a> </li>
        </ul>
      </li>
      @endif

      @if (NetmaiestaClass::hasAccess('membership'))
      <li>
        <a href="{{route("membership.index")}}" class="waves-effect">
          <i  class="fa fa-drivers-license-o fa-fw"></i>
          <span class="hide-menu"> Memberships <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{route("membership.index")}}"><i class="fa fa-users fa-fw"></i><span class="hide-menu"> Memberships</span></a> </li>
          <li> <a href="{{route("membership.create")}}"><i class="fa fa-plus-square-o fa-fw"></i><span class="hide-menu"> New Membership</span></a> </li>
          <li>
            <a href="{{route("new-applications")}}"><i class="fa fa-cloud fa-fw"></i>
              <span class="hide-menu"> Online Memberships <span class="fa arrow"></span>
              </span>
            </a>
            <ul class="nav nav-third-level collapse">
                <li> <a href="{{route("new-applications")}}"><i class="fa fa-newspaper-o fa-fw"></i><span class="hide-menu">New Applications</span></a></li>
                <li> <a href="{{route("changes-requests")}}"><i class="fa fa-pencil-square-o fa-fw"></i><span class="hide-menu">Change Requests</span></a></li>
            </ul>
          </li>
        </ul>
      </li>
      <li class="devider"></li>
      @endif

      @if (NetmaiestaClass::hasAccess('anno'))
      <li>
        <a href="{{route('press-release.index')}}" class="waves-effect">
          <i  class="fa fa-newspaper-o fa-fw"></i>
          <span class="hide-menu"> Press Releases <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{route('press-release.index')}}"><i class="fa fa-eye fa-fw"></i><span class="hide-menu">View All</span></a> </li>
          <li> <a href="{{route('press-release.create')}}"><i class="fa fa-pencil fa-fw"></i><span class="hide-menu">Add Release</span></a> </li>
        </ul>
      </li>


      <li>
        <a href="{{ route('info-bulletin.index') }}" class="waves-effect">
          <i  class="fa fa-info-circle  fa-fw"></i>
          <span class="hide-menu"> News & IBulletins  <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ route('info-bulletin.index') }}"><i class="fa fa-eye fa-fw"></i><span class="hide-menu">View All</span></a> </li>
          <li> <a href="{{ route('info-bulletin.create') }}"><i class="fa fa-pencil fa-fw"></i><span class="hide-menu">New News & IB</span></a> </li>
        </ul>
      </li>

      <li>
        <a href="{{ route('events.index') }}" class="waves-effect">
          <i  class="fa fa-file-o  fa-fw"></i>
          <span class="hide-menu"> Events & Activities <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ route('events.index') }}"><i class="fa fa-eye fa-fw"></i><span class="hide-menu">View All</span></a> </li>
          <li> <a href="{{ route('events.create') }}"><i class="fa fa-pencil fa-fw"></i><span class="hide-menu">New Event & Activity</span></a> </li>
        </ul>
      </li>

      <li>
        <a href="index.html" class="waves-effect">
          <i  class="fa fa-bullhorn fa-fw"></i>
          <span class="hide-menu"> Announcements <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{route("ann-index")}}"><i class="fa fa-eye fa-fw"></i><span class="hide-menu">View all</span></a> </li>
          <li> <a href="{{route("ann-index").'?an=compose'}}"><i class="fa fa-plus fa-fw"></i><span class="hide-menu">New Announcement</span></a> </li>
        </ul>
      </li>
      @endif

      @if (NetmaiestaClass::hasAccess('media'))
      <li>
        <a href="{{ (Request::segment(1) == 'gallery') ? route('gallery') : route('video') }}" class="waves-effect">
          <i  class="fa fa-camera fa-fw"></i>
          <span class="hide-menu"> Media Gallery <span class="fa arrow"></span>
          </span>
        </a>
        <ul class="nav nav-second-level">
          <li> <a href="{{ route('gallery') }}"><i class="fa fa-facebook fa-fw"></i><span class="hide-menu">Facebook Albums <span class="fa arrow"></span></span></a>
            <ul class="nav nav-third-level collapse">
                <li> <a href="{{ route('gallery') }}"><i class="fa fa-cog fa-fw"></i><span class="hide-menu">Manage Albums</span></a></li>
            </ul>
          </li>
          <li> <a href="{{ route('video') }}"><i class="fa fa-youtube fa-fw"></i><span class="hide-menu">Youtube Videos</span></a> </li>
        </ul>
      </li>
      @endif

      @if (NetmaiestaClass::hasAccess('contact'))
      <li>
        <a href="{{ url('contact') }}" class="waves-effect">
          <i  class="fa fa-street-view fa-fw"></i>
          <span class="hide-menu"> Contact Info
          </span>
        </a>
      </li>
      <li class="devider"></li>
      @endif

      @if (NetmaiestaClass::hasAccess('membership'))
      <li><a href="{{route("new-applications")}}" class="waves-effect"><i class="fa fa-circle-o text-danger"></i> <span class="hide-menu"> Member Requests</span></a></li>
      <li><a href="{{route("changes-requests")}}" class="waves-effect"><i class="fa fa-circle-o text-info"></i> <span class="hide-menu"> Member Changes</span></a></li>
      <li><a href="{{route("ann-index")}}" class="waves-effect"><i class="fa fa-circle-o text-success"></i> <span class="hide-menu">Announcements</span></a></li>
      @endif

    </ul>
  </div>
</div>
