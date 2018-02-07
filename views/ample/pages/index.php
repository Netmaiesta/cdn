
  <div class="row bg-title">

    <!-- .page title -->
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title"> {{ $pg_title or 'Sample' }} </h4> </div>
    <!-- /.page title -->

    <!-- .breadcrumb -->
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
      <ol class="breadcrumb">
        <li><a href="#">Dashboard</a></li>
        <li class="active">Here</li>
      </ol>
    </div>
    <!-- /.breadcrumb -->
  </div>

  <!-- .row -->
  <div class="row ">
    <div class="col-md-12">
      <div class="white-box">
        <h3 class="box-title">
          Now working on
        </h3>
          <a href="Sample">
            <code>Simple</code>
          </a>
      </div>
    </div>
  </div>
  <!-- .row -->

  <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">New Sample Sample</h3>
              <ul class="list-inline two-part">
                  <li><i class="icon-people text-info"></i></li>
                  <li class="text-right"><span class="counter">{{ count($member_new) }}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Change Sample</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-pencil text-purple"></i></li>
                  <li class="text-right"><span class="counter">{{ count($member_changes) }}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Sample Read</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-eye text-danger"></i></li>
                  <li class="text-right"><span class="">{{count($member_ann_track)}}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Future Sample</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-bullhorn text-success"></i></li>
                  <li class="text-right"><span class="">{{count($fut_activity)}}</span></li>
              </ul>
          </div>
      </div>
  </div>


  <!-- .row -->
