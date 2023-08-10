

@extends('frontend.layouts.header')

@section('content')
    <!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="bg slider">

      <img src="{{asset('frontend/img/padc-1.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-2.jpg')}}" alt='platinum architectural design competition'>
      <img src="{{asset('frontend/img/padc-3.jpg')}}" alt='platinum architectural design competition'>
    </div>
    <div class="hero-container verified" data-aos="zoom-in" data-aos-delay="100">
        <h1 class="mb-4 pb-0">Verify  <span>Your</span> <br>  Email Address</h1>
        @if (session('resent'))
            <div class="alert alert-success" role="alert">
                {{ 'A fresh verification link has been sent to your email address.' }}
            </div>
        @endif

        <div class="launch">{{ __('Before proceeding, please check your email for a verification link.') }}
                   </div>
        <div class="launch"> {{ __('If you did not receive the email') }}, </div>
        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
            @csrf
            <button type="submit" class="send-link">{{ __('click here to request another') }}</button>.
        </form>
    </div>
</section>



@endsection






