@extends('frontend.layouts.app')
@section('title', 'PADC | Have you follow?')
@section('description', 'Complete team profile to join Platinum Architectural Design Competition')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com/follow')
@section('url','https://padc-platinumceramics.com/follow')
@section('content')
<main id="main">
  <div class="breadcrumbs-follow d-flex align-items-center" style="background-image: url({{asset('frontend/assets/img/padc-background-1.jpg')}});">
    <div class="container position-relative d-flex flex-column align-items-center">
      <h2>Follow and Subsribe</h2>
      <div class="d-flex flex-column align-items-center">
        <div class="launch mt-5">Before processing Team Members, Please Follow the Instagram account<a href="https://www.instagram.com/platinum.ceramics/" target="_blank">@platinum.ceramics </a> and subscribe to youtube  <a href="https://www.youtube.com/channel/UCkXWJfBrOPwN6vdFMoh28YQ" target="_blank">Platinum Ceramics</a>!</div>
        <div class="launch mt-2">Have you followed the Instagram account<a href="https://www.instagram.com/platinum.ceramics/" target="_blank">@platinum.ceramics </a>  and subscribed to youtube <a href="https://www.youtube.com/channel/UCkXWJfBrOPwN6vdFMoh28YQ" target="_blank">Platinum Ceramics</a> before?</div>
        <div class="row mt-5">
          <div class="col-md-6">
            <a href="javascript:void(0)" class="btn-follow" style="color:#fff" for="age1"  onclick="event.preventDefault(); document.getElementById('yes-form-{{$user->id}}').submit();">yes</a>
          </div>
          <div class="col-md-6">
            <a href="javascript:void(0)" class="btn-follow" style="color:#fff; background-color: #916400"  for="age2" onclick="event.preventDefault(); document.getElementById('no-form-{{$user->id}}').submit();">no</a><br>  
          </div>
          <form id="yes-form-{{$user->id}}" action="{{ route('follow_yes',$user->id)}}" method="POST" style="display: none;">
            @csrf                   
          </form>
          <form id="no-form-{{$user->id}}" action="{{ route('follow_no',$user->id)}}" method="POST" style="display: none;">
            @csrf                   
          </form>
        </div> 
      </div>
    </div>
 
  </div>
</main>
<script>


  

  
  </script>
@endsection
