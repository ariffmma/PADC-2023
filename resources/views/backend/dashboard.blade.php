@extends('backend.layout.master')

@section('content')
<section class="content">
<div class="row">
  <div class="col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fa fa-user"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">All User</span>
        <span class="info-box-number">{{ $countuser }}</span>
      </div>
    </div>
  </div>
 
  <div class="col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fa fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Team</span>
        <span class="info-box-number">{{ $countteam }}</span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fa fa-upload"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Submit Link</span>
        <span class="info-box-number">{{ $countsubmit }}</span>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-info"><i class="fa fa-download"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Download Catalog</span>
        <span class="info-box-number">{{ $countemail }}</span>
      </div>
    </div>
  </div>
  
  
</div>
</section>



@endsection 