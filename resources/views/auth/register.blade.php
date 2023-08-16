@extends('frontend.layouts.app')
@section('title','register')
@section('content')
<section id="hero_account">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0"><span> Register</span> To <br>Join Competition</h1>
    </div>
</section>
<main id="main">
<section id="account" >
  <div class="container" data-aos="fade-up">
    <ul class="nav nav-tabs justify-content-center" role="tablist" data-aos="fade-up" data-aos-delay="100">
      <li class="nav-item"><a class="nav-link " id="tab_login" href="{{route('login')}}" style="font-weight: 900 !important;">Login</a></li>
      <li class="nav-item"><a class="nav-link active" id="tab_register" href="#tab-2" role="tab" data-bs-toggle="tab" style="font-weight: 900 !important;">Register</a></li>
      <li class="nav-item"><a class="nav-link" id="tab_reset" href="{{ route('password.request') }}" style="font-weight: 900 !important;">Forgot Password</a></li>
    </ul>
    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="tab-2">
            <div class="row justify-content-center" id="register" >
                <div class="col-md-5">
               @php
                $current = strtotime(date("Y-m-d h:i:s"));
                $registration = strtotime("2023-10-25 23:59:00");
                $a = $registration - $current;
                $regist = floor($a/(60*60*24));
                if($regist > 0)
                {
                @endphp
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row mb-3">
                            <div class="form-group col-md-12">
                                <input id="name" type="text" class="form-control input @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" required autocomplete="name" autofocus placeholder="User Name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" required autocomplete="email" value="{{ old('email') }}" placeholder="Email Address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input id="password" type="password" style="display: inline;" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password"><i class="bi bi-eye-slash" id="togglePassword"></i>
                                <small>*Password must be at least 8 characters</small>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <input id="password-confirm" type="password" style="display: inline;" class="form-control input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="new-password" placeholder="Password Confirmation"><i class="bi bi-eye-slash" id="togglePasswordd"></i>
                                @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="font-weight: 900 !important;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    @php
                    }else{
                    @endphp
                    <div class="row justify-content-center">
                        <h3 style="text-align:center;">Registration closed</h3>
                    </div>
                    @php
                    }
                    @endphp
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

    const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
    });  

    const togglePasswordd = document.querySelector('#togglePasswordd');
    const passwordd = document.querySelector('#password-confirm');

    togglePasswordd.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = passwordd.getAttribute('type') === 'password-confirm' ? 'text' : 'password-confirm';
        passwordd.setAttribute('type', type);
        // toggle the eye / eye slash icon
        this.classList.toggle('bi-eye');
    });  
});
</script>
@endsection
