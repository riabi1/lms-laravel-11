@extends('frontend.layouts.master-without-header-footer')
@section('content')
    <!--===========================
                            SIGN UP START
                        ============================-->
    <section class="wsus__sign_in sign_up">
        <div class="row align-items-center">
            <div class="col-xxl-5 col-xl-6 col-lg-6 wow fadeInLeft">
                <div class="wsus__sign_img">
                    <img src="{{ asset('frontend/assets/images/login_img_2.jpg') }}" alt="login" class="img-fluid">
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
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <h2>Sign Up<span>!</span></h2>
                                <p class="new_user">
                                    {{ __('Already have an account?') }}
                                    <a href="{{ route('login') }}">{{ __('Sign In') }}</a>
                                </p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <x-input-label for="name" :value="__('Name')" />
                                            <x-text-input id="name" class="block mt-1 w-full" type="text"
                                                name="name" :value="old('name')" required autofocus autocomplete="name"
                                                placeholder="First name" />
                                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="block mt-1 w-full" type="email"
                                                name="email" :value="old('email')" required autocomplete="username"
                                                placeholder="Your email" />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <x-input-label for="password" :value="__('Password')" />
                                            <x-text-input id="password" class="block mt-1 w-full" type="password"
                                                name="password" required autocomplete="new-password"
                                                placeholder="Your password" />
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                type="password" name="password_confirmation" required
                                                autocomplete="new-password" placeholder="Confirm password" />
                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="wsus__login_form_input">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault" required>
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    {!! __(
                                                        'By clicking Create account, I agree that I have read and accepted the <a href="#">Terms of Use</a> and <a href="#">Privacy Policy.</a>',
                                                    ) !!}
                                                </label>
                                            </div>
                                            <button type="submit" class="common_btn mt-3">{{ __('Register') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="back_btn" href="{{ url('/') }}">Back to Home</a>
    </section>
    <!--===========================
                            SIGN UP END
                        ============================-->
@endsection
