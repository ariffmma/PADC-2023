@extends('frontend.layouts.app')
@section('title', 'Login')
@section('content')
<section id="hero_account">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0"><span> Login</span> To <br>Join Competition</h1>
    </div>
</section>
<main id="main">
<section id="account" >
  <div class="container" data-aos="fade-up">
    <ul class="nav nav-tabs justify-content-center" role="tablist" data-aos="fade-up" data-aos-delay="100">
      <li class="nav-item"><a class="nav-link active" id="tab_login" href="#tab-1" role="tab" data-bs-toggle="tab" style="font-weight: 900 !important;">Login</a></li>
      <li class="nav-item"><a class="nav-link" id="tab_register" href="{{route('register')}}" style="font-weight: 900 !important;">Register</a></li>
      <li class="nav-item"><a class="nav-link" id="tab_reset"  href="{{ route('password.request') }}" style="font-weight: 900 !important;">Forgot Password</a></li>
    </ul>
    <div class="tab-content row justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="tab-1">
            <div class="row justify-content-center" id="login" >
                <div class="col-md-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-12">
                                <input type="email" name="email" class="form-control input @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" autocomplete="email" required autofocus placeholder="Email Address">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                       
                                <input type="password" name="password" style="display: inline;" class="form-control input @error('password') is-invalid @enderror" id="password" autocomplete="current-password" required placeholder="Password"><i class="bi bi-eye-slash" id="togglePassword"></i>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <span>{{ $message }}</span>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div data-aos="fade-up">
                                <div class="nav" role="tablist" data-aos="fade-up" data-aos-delay="100">
                                    <a  id="tab_reset2" href="{{ route('password.request') }}">Forgot Password?</a>
                                </div>
                              </div>
                            <div class="form-group col-md-12">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                        <div class="row mb-0 text-center">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" style="font-weight: 900 !important;">
                                    {{ __('Login') }}
                                </button>
                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
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

        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function (e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            // toggle the eye / eye slash icon
            this.classList.toggle('bi-eye');
        });
    });
</script>
@endsection
