@extends('frontend.layouts.master-without-header-footer')

@section('content')
    <!--===========================
                                SIGN IN START
                            ============================-->
    <section class="wsus__sign_in">
        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="wsus__sign_img">
                    <img src="{{ asset('frontend/assets/images/login_img_1.jpg') }}" alt="login" class="img-fluid">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="EduCore" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-9 m-auto wow fadeInRight">
                <div class="wsus__sign_form_area">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <form method="POST" action={{ route('login') }}>
                                @csrf
                                <h2 class="mb-2">Log in</h2>
                                <p>Welcome Back! Please log in to your account</p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label for="email">Email*</label>
                                            <input id="email" type="email" name="email" placeholder="Email"
                                                value="{{ old('email') }}" required autofocus autocomplete="username">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <label for="password">Password*
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">Forgot Password?</a>
                                                @endif
                                            </label>
                                            <input id="password" type="password" name="password" placeholder="Password"
                                                required autocomplete="current-password">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember_me" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember_me">
                                                    Remember Me
                                                </label>
                                            </div>
                                            <button type="submit" class="common_btn">Sign In</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <p class="create_account">Don't have an account? <a href="{{ route('register') }}">Create free
                                    account</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="back_btn" href="{{ url('/') }}">Back to Home</a>
    </section>
    <!--===========================
                                SIGN IN END
                            ============================-->
@endsection
