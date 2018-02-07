<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<nav class="navbar navbar-default navbar-static-top m-b-0 small-box-shadow">
  <div class="navbar-header">
    <div class="top-left-part">
      <!-- Logo -->
      <a class="logo" href="{{url('/')}}">
        <!-- Logo icon image, you can use font-icon also -->
        <b>
          <!--This is dark logo icon-->
          <img src="{{asset('nmt-tmpl')}}/plugins/images/admin-logo-v1.png" alt="home" class="dark-logo" />
          <!--This is light logo icon-->
          <img src="{{asset('nmt-tmpl')}}/plugins/images/admin-logo-v1.png" alt="home" class="light-logo" />
        </b>
        <!-- Logo text image you can use text also -->
        <span class="hidden-xs">
          <!--This is dark logo text-->
          <img src="{{asset('nmt-tmpl')}}/plugins/images/admin-text-v1.png" alt="home" class="dark-logo" />
          <!--This is light logo text-->
          <img src="{{asset('nmt-tmpl')}}/plugins/images/admin-text-v1.png" alt="home" class="light-logo" />
        </span>
      </a>
    </div>
    <!-- /Logo -->

    <!-- Search input and Toggle icon -->
    <ul class="nav navbar-top-links navbar-left">
      <li><a href="javascript:void(0)" class="open-close waves-effect waves-light"><i class="ti-menu"></i></a></li>
      <li class="dropdown hidden">
        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="fa fa-user"></i>
            <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
        </a>
        <ul class="dropdown-menu mailbox animated bounceInDown">
          <li>
            <div class="drop-title">4 new member requests</div>
          </li>
          <li>
            <div class="message-center">
              <a href="#">
                <div class="user-img"> <img src="{{asset('nmt-tmpl')}}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Pavan kumar</h5> <span class="mail-desc">Pavi Car Sales Pvt Ltd</span> <span class="time">2 Days ago</span> </div>
              </a>
            </div>
          </li>
          <li>
            <a class="text-center" href="javascript:void(0);"> <strong>See all</strong> <i class="fa fa-angle-right"></i> </a>
          </li>
        </ul>
        <!-- /.dropdown-messages -->
      </li>
      <!-- .Task dropdown -->
      <li class="dropdown hidden">
        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"> <i class="mdi mdi-check-circle"></i>
          <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
        </a>
          <ul class="dropdown-menu mailbox animated bounceInDown">
            <li>
              <div class="drop-title">4 new changes to review</div>
            </li>
            <li>
              <div class="message-center">
                <a href="#">
                  <div class="user-img"> <img src="{{asset('nmt-tmpl')}}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                  <div class="mail-contnet">
                    <h5>Pavan kumar</h5> <span class="mail-desc">Pavi Car Sales Pvt Ltd</span> <span class="time">2 Days ago</span> </div>
                </a>
              </div>
            </li>
            <li>
              <a class="text-center" href="javascript:void(0);"> <strong>See all changes</strong> <i class="fa fa-angle-right"></i> </a>
            </li>
          </ul>
      </li>

      @php
        /*
        <!-- .Megamenu -->
        <li class="mega-dropdown"> <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#"><span class="hidden-xs">Mega</span> <i class="icon-options-vertical"></i></a>
          <ul class="dropdown-menu mega-dropdown-menu animated bounceInDown">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Forms Elements</li>
                <li><a href="form-basic.html">Basic Forms</a></li>
                <li><a href="form-layout.html">Form Layout</a></li>
                <li><a href="form-advanced.html">Form Addons</a></li>
                <li><a href="form-material-elements.html">Form Material</a></li>
                <li><a href="form-float-input.html">Form Float Input</a></li>
                <li><a href="form-upload.html">File Upload</a></li>
                <li><a href="form-mask.html">Form Mask</a></li>
                <li><a href="form-img-cropper.html">Image Cropping</a></li>
                <li><a href="form-validation.html">Form Validation</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Advance Forms</li>
                <li><a href="form-dropzone.html">File Dropzone</a></li>
                <li><a href="form-pickers.html">Form-pickers</a></li>
                <li><a href="form-wizard.html">Form-wizards</a></li>
                <li><a href="form-typehead.html">Typehead</a></li>
                <li><a href="form-xeditable.html">X-editable</a></li>
                <li><a href="form-summernote.html">Summernote</a></li>
                <li><a href="form-bootstrap-wysihtml5.html">Bootstrap wysihtml5</a></li>
                <li><a href="form-tinymce-wysihtml5.html">Tinymce wysihtml5</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Table Example</li>
                <li><a href="basic-table.html">Basic Tables</a></li>
                <li><a href="table-layouts.html">Table Layouts</a></li>
                <li><a href="data-table.html">Data Table</a></li>
                <li><a href="bootstrap-tables.html">Bootstrap Tables</a></li>
                <li><a href="responsive-tables.html">Responsive Tables</a></li>
                <li><a href="editable-tables.html">Editable Tables</a></li>
                <li><a href="foo-tables.html">FooTables</a></li>
                <li><a href="jsgrid.html">JsGrid Tables</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Charts</li>
                <li> <a href="flot.html">Flot Charts</a> </li>
                <li><a href="morris-chart.html">Morris Chart</a></li>
                <li><a href="chart-js.html">Chart-js</a></li>
                <li><a href="peity-chart.html">Peity Charts</a></li>
                <li><a href="knob-chart.html">Knob Charts</a></li>
                <li><a href="sparkline-chart.html">Sparkline charts</a></li>
                <li><a href="extra-charts.html">Extra Charts</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- /.Megamenu -->
        */
      @endphp

    </ul>

    <ul class="nav navbar-top-links navbar-right pull-right">
      <li class="hidden">
        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
          <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img style="height:36px;width:36px" onerror="this.src='https://placehold.it/128x128?text=No+Image'" src="{{ NetmaiestaClass::getAdminPath(TRUE) . '/thumb_' . session('aUser')->avatar }}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">
          {{ session('aUser')->name }}</b><span class="caret"></span> </a>
        <ul class="dropdown-menu dropdown-user animated flipInY">
          <li>
            <div class="dw-user-box" style="text-overflow: ellipsis;overflow: hidden;white-space: nowrap;">
              <div class="u-img"><img  height="80" width="80" onerror="this.src='https://placehold.it/128x128?text=No+Image'" src="{{ NetmaiestaClass::getAdminPath(TRUE) . '/thumb_' . session('aUser')->avatar }}" alt="user" /></div>
              <div class="u-text">
                <h4>{{ session('aUser')->name }}</h4>
                <p class="text-muted">{{ session('aUser')->email }}</p><a href="{{ route('profile') }}" class="btn btn-rounded btn-danger btn-sm">View Profile</a></div>
            </div>
          </li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('profile') }}"><i class="ti-user"></i> My Profile</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="{{ route('logout') }}"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
        <!-- /.dropdown-user -->
      </li>
      <!-- /.dropdown -->
    </ul>
  </div>
  <!-- /.navbar-header -->
  <!-- /.navbar-top-links -->
  <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->
