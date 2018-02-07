@extends('layouts.v1')

@section('pg-content')

  <div class="row bg-title">

    <!-- .page title -->
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title"> {{ $pg_title or 'Via-SL Backend' }} </h4> </div>
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
  <div class="row hidden">
    <div class="col-md-12">
      <div class="white-box">
        <h3 class="box-title">
          Now working on
        </h3>
          <a href="http://www.via-sl.com/wms/info-bulletin/create">
            <code>http://www.via-sl.com/wms/info-bulletin/create</code>
          </a>
      </div>
    </div>
  </div>
  <!-- .row -->

  <div class="row">
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">New Member Requests</h3>
              <ul class="list-inline two-part">
                  <li><i class="icon-people text-info"></i></li>
                  <li class="text-right"><span class="counter">{{ count($member_new) }}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Change Requests</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-pencil text-purple"></i></li>
                  <li class="text-right"><span class="counter">{{ count($member_changes) }}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Announcement Read</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-eye text-danger"></i></li>
                  <li class="text-right"><span class="">{{count($member_ann_track)}}</span></li>
              </ul>
          </div>
      </div>
      <div class="col-lg-3 col-sm-6 col-xs-12">
          <div class="white-box">
              <h3 class="box-title">Future Activities</h3>
              <ul class="list-inline two-part">
                  <li><i class="fa fa-bullhorn text-success"></i></li>
                  <li class="text-right"><span class="">{{count($fut_activity)}}</span></li>
              </ul>
          </div>
      </div>
  </div>

  <!-- .row -->
  <div class="row">

    <div class="col-md-8">
      <div class="white-box">
        <h3 class="box-title">
          Recent announcements
        </h3>
        <ul>
          @foreach ($rec_ann as $entry)
            <li>{{$entry->ann_subject}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="col-md-4">
      <div class="white-box">
        <h3 class="box-title">
          Recent member requests
        </h3>
        @if (count($member_new)  == 0)
          <div class="text-muted">
            No new requests at the moment
          </div>
        @endif
        <ul>
          @foreach ($member_new as $member)
            <li>{{$member->member_name .' - '. $member->business_name}}</a></li>
          @endforeach
        </ul>
      </div>
    </div>


    <div class="col-md-5">
        <img class="img-responsive small-box-shadow" src="http://www.via-sl.com/wms/nmt-tmpl/plugins/images/login-register.jpg" alt="">
    </div>
  </div>
  <!-- .row -->

@endsection
