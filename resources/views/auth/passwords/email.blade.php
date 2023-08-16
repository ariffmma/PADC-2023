@extends('frontend.layouts.app')
@section('content')
    <!-- ======= Hero Section ======= -->
<section id="hero_account">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0"><span>Reset</span><br> Your Password </h1>
    </div>
</section>
<main id="main">
<section id="account" >
  <div class="container" data-aos="fade-up">
    <ul class="nav nav-tabs justify-content-center" role="tablist" data-aos="fade-up" data-aos-delay="100">
      <li class="nav-item"><a class="nav-link " id="tab_login"href="{{route('login')}}" style="font-weight: 900 !important;">Login</a></li>
      <li class="nav-item"><a class="nav-link" id="tab_register" href="{{route('register')}}" style="font-weight: 900 !important;">Register</a></li>
      <li class="nav-item"><a class="nav-link active" id="tab_reset" href="#tab-3" role="tab" data-bs-toggle="tab" style="font-weight: 900 !important;">Forgot Password</a></li>
    </ul>
    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div role="tabpanel" class="col-lg-9  tab-pane fade  show active" id="tab-3">
            <div class="row justify-content-center" id="register" >
                <div class="col-md-5">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group col-md-12">
                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="font-weight: 900 !important;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
</main>
<script>
    $(document).ready(function(){
        $('.input, .input-select').each(function(){
            if($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        });
        $('.input, .input-select').each(function(){
            $(this).on('change', function(){
                if($(this).val().trim() != "") {
                    $(this).addClass('has-val');
                }
                else {
                    $(this).removeClass('has-val');
                }
            }); 
        });   
    });
    </script>
@endsection
