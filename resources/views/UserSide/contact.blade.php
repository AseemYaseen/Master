@extends('UserSide.layout.master')

@section('title')

contact

@endsection

@section('css')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="{{asset('user/myCss/contactUS.css') }}">

@endsection


{{--============= showCase ===============--}}
@section('underNav')
<div class="WelcomeContent">
    <h1 class="Welcome"><span> us</span></h1>
    <div class="contactHead">
     <p>If you want to talk us you can use</p>
     <p>Email : asemyassen300@gmail.com </p>
     <p>Phone : 00962778079491</p>
     <p><span>OR</span> if you want to send us a message</p>
     <span><a href="#msg">Send a message</a></span>
    </div>
 </div>
@endsection

{{--============= contant ===============--}}
@section('content')

<section>
    <h3>Send a message</h3>

    <div class="container">
    <form action="">
        <label class="label" for="fname">Name</label>
        <input class="input" type="text" id="fname" name="name" placeholder="Your name..">
    
        <label for="email">Email</label>
        <input class="input" type="text" id="email" name="email" placeholder="Your email..">

        <label for="phone">Phone Number</label>
        <input class="input" type="number" id="phone" name="phone" placeholder="Your phone number">

        <!-- <label class="label" for="country">Country</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select> -->
    
        <label class="label" for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    
        <input id="msg" type="submit" value="Submit">
    </form>
    </div>
</section>

@endsection
@section('scroll')

<span class="up"> <i class="fa-solid fa-up-long"></i></span>

@endsection
@section('script')



@endsection