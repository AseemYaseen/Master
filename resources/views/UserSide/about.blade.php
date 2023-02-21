@extends('UserSide.layout.master')

@section('title')

about

@endsection

@section('css')

<link rel="stylesheet" href="{{asset('user/myCss/about.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

@endsection


{{--============= showCase ===============--}}
@section('underNav')

<div class="WelcomeContent">
    <h1 class="Welcome"><span> us</span></h1>
    <div class="contactHead">
     <p>We are happy to present this project to help people who wish to travel at the expense of all their basic costs</p>
     <p>And we hope in the future to provide greater value by including more places within the site and providing services that meet the satisfaction of all our users</p>
     <p><span>Thank you all for being a part from our website !</span></p>
    </div>
 </div>

@endsection

{{--============= contant ===============--}}
@section('content')


@endsection
@section('scroll')

<span class="up"> <i class="fa-solid fa-up-long"></i></span>

@endsection

@section('script')



@endsection