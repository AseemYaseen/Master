@extends('UserSide.layout.master')

@section('title')


@endsection

@section('css')
<link rel="stylesheet" href="{{asset('user/myCss/login.css') }}">

<style>
    .registetBB{
        text-decoration: none;
        color: white;
    }
</style>

@endsection


{{--============= showCase ===============--}}
@section('underNav')

@endsection

{{--============= contant ===============--}}

@section('content')
<form method="POST" action="{{ route('user.loginPost') }}">
    @csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"><a class="registetBB" href="{{route('user.Registers')}}">Sign Up</a></label>
        <div class="login-form">
            <div class="sign-in-htm">
                
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" name="email" type="text" class="input" class="@error('email') is-invalid @enderror">
                    @error('email')
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
                    <input id="check" type="checkbox" class="check" checked>
                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign In">
                </div>
            </div>
        </form>


        </div>
    </div>
       
</div>

@endsection

@section('script')



@endsection