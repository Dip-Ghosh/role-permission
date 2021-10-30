@extends('registration.app')

@section('content')
    <div class="mb-20">
        <h3 class="opacity-40 font-weight-normal">Login</h3>
        <p class="opacity-40">Enter your details to login to your account:</p>
    </div>
    <form class="form" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text"
                   placeholder="Email" name="email"/>
        </div>
        <div class="form-group">
            <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password"
                   placeholder="Password" name="password"/>
        </div>
        <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
            <div class="checkbox-inline">
                <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                    <input type="checkbox" name="remember"/>
                    <span></span>Remember me</label>
            </div>
            <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
        </div>
        <div class="form-group text-center mt-10">
            <button type="submit" id="" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
        </div>

    </form>
    <div class="mt-10">
        <span class="opacity-40 mr-4">Don't have an account yet?</span>
        <a href="{{ route('register') }}" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Sign
            Up</a>
    </div>
    <div class="login-forgot">
        <div class="mb-20">
            <h3 class="opacity-40 font-weight-normal">Forgotten Password ?</h3>
            <p class="opacity-40">Enter your email to reset your password</p>
        </div>

    </div>

@endsection
