@extends('frontend.layouts.header')
@section('title', 'PADC | Have you follow?')
@section('description', 'Complete team profile to join Platinum Architectural Design Competition')
@section('keywords', 'platinum, Architectural, Design, Competition, student competition, design competition, design contest, architecture competition, architecture contest')
@section('canonical', 'https://padc-platinumceramics.com/follow')
@section('url','https://padc-platinumceramics.com/follow')
@section('content')

@php 
$i = 0;
$no = 1;
$no2 = 1;
$no3 = 1;
$no4 = 1;
$no5 = 1;
@endphp
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="bg slider">

      <img src="{{asset('frontend/img/padc-background-1.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-background-2.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-background-3.jpg')}}" alt='platinum architectural design competition'>
    </div>
        <div class="hero-container verified" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0"><span>Follow </span> and <br> <span>Subsribe</span> </h1>
        <div class="launch">Before processing Team Members, Please Follow the Instagram account<a href="https://www.instagram.com/platinum.ceramics/" target="_blank">@platinum.ceramics </a> <br> and subscribe to youtube  <a href="https://www.youtube.com/channel/UCkXWJfBrOPwN6vdFMoh28YQ" target="_blank">Platinum Ceramics</a>!</div>
</br>
        <div class="launch">Have you followed the Instagram account<a href="https://www.instagram.com/platinum.ceramics/" target="_blank">@platinum.ceramics </a>  and subscribed to youtube <a href="https://www.youtube.com/channel/UCkXWJfBrOPwN6vdFMoh28YQ" target="_blank">Platinum Ceramics</a> before?</div>
            <div class="row">
              <div class="col-md-6">
                            <a href="javascript:void(0)" class="follow-btn" for="age1"  onclick="event.preventDefault();
                                                      document.getElementById('yes-form-{{$user->id}}').submit();">yes</a>
              </div>
              <div class="col-md-6">
              <a href="javascript:void(0)" class="follow-btn" for="age2" onclick="event.preventDefault();
                                                      document.getElementById('no-form-{{$user->id}}').submit();">no</a><br>  
              </div>
              
              
              
                <form id="yes-form-{{$user->id}}" action="{{ route('follow_yes',$user->id)}}" method="POST" style="display: none;">
                    @csrf                   
                </form>
                <form id="no-form-{{$user->id}}" action="{{ route('follow_no',$user->id)}}" method="POST" style="display: none;">
                    @csrf                   
                </form>
            </div>  
      
      </div>
    </section><!-- End Hero Section -->


<script>


  

  
  </script>
@endsection
