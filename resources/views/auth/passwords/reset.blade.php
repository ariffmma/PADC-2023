@extends('frontend.layouts.header')

@section('content')

<section id="hero_account">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
    <h1 class="mb-4 pb-0"><span> REset</span> Password</h1>
    </div>
</section>

<main id="main">
    <!-- ======= Schedule Section ======= -->
    <section id="account" >

        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center mb-1">
                <div class="col-lg-9" >
                    <div class="row justify-content-center" id="register" >
                        <div class="col-md-5">
                            
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <div class="row mb-3">
                                
                                    <div class="form-group col-md-12">
                                        <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                                        <span class="focus-input" data-placeholder="Email Address"></span>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                            
                                    <div class="form-group col-md-12">
                                        <input id="password" type="password" class="form-control input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        <span class="focus-input" data-placeholder="New Password"></span>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                    
                                    <div class="form-group col-md-12">
                                        <input id="password-confirm" type="password" class="form-control input" name="password_confirmation" required autocomplete="new-password">
                                        <span class="focus-input" data-placeholder="Confirm New Password"></span>
                                    </div>
                                </div>

                                <div class="row mb-0 text-center">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Reset Password') }}
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
