{{-- @if (count($errors) > 0)
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-autohd">
      {{$error}}
    </div>
  @endforeach
@endif --}}

@if (session('ses-success'))
  <div class="alert alert-success alert-autohd animated bounceInDown" style="margin-top:18px">
    {{session('ses-success')}}
  </div>
@endif

@if (session('ses-error'))
  <div class="alert alert-danger alert-autohd">
    {{session('ses-error')}}
  </div>
@endif
