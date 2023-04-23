@extends('UserSide.layout.master')

@section('title')
Register
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('user/myCss/login.css') }}">
<style>
    .loginBB{
        color: white;
        text-decoration: none;
    }
</style>

@endsection

{{--============= showCase ===============--}}
@section('underNav')

@endsection

{{--============= content ===============--}}
@section('content')
    <form method="POST" action="{{ route('user.Registerss') }}">
        @csrf
        <div class="login-wrap">
            <div class="login-html">
                      <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a class="loginBB" href="{{route('user.login')}}">Sign in</a></label>
                <input id="tab-2" type="radio" name="tab" class="sign-up" checked>
                <label for="tab-2" class="tab">Sign Up</label>
                <div class="login-form">
                    <div class="sign-up-htm">
                        <div class="group">
                            <label for="user" class="label">Username</label>
                            <input id="user" name="name" type="text" class="input" class="@error('name') is-invalid @enderror">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="pass" name="password" type="password" class="input" data-type="password" class="@error('password') is-invalid @enderror">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email Address</label>
                            <input id="pass" name="email" type="text" class="input" class="@error('email') is-invalid @enderror">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="group">
                            <button type="submit" class="button" value="Sign Up">Register</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('script')

@endsection
