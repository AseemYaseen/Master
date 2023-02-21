@extends('UserSide.layout.master')

@section('title')


@endsection

@section('css')
<link rel="stylesheet" href="{{asset('user/myCss/login.css') }}">

@endsection


{{--============= showCase ===============--}}
@section('underNav')

@endsection

{{--============= contant ===============--}}

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf
<div class="login-wrap">
    <div class="login-html">
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <div class="sign-in-htm">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password">
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

        {{-- Register --}}
        <form method="POST" action="{{ route('Registerss') }}">
            @csrf
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
                    <input id="pass" name="password" type="password" class="input" data-type="password"  class="@error('password') is-invalid @enderror">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="group">
                    <label for="number" class="label">Phone</label>
                    <input id="number" name="phone" type="text" class="input"  class="@error('phone') is-invalid @enderror">
                    @error('phone')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                {{-- <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="pass" type="password" class="input" data-type="password">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div> --}}
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" name="email" type="text" class="input"  class="@error('email') is-invalid @enderror">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                   @enderror
                </div>
                <div class="group">
                    <button type="submit" class="button" value="Sign Up">Register</button>
                </div>
            </div>
         </form>
        </div>
    </div>
       
</div>

@endsection

@section('script')



@endsection