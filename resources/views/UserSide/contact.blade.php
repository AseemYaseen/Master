@extends('UserSide.layout.master')

@section('title')

contact

@endsection

@section('css')

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="{{asset('user/myCss/contactUS.css') }}">
<style>
.invalid-feedback {
  position: absolute;
  color: red;
  font-size: 13px;
  margin-top: -3px;
}

label + .input {
  margin-top: 20px;
}

input[type="submit"] {
  margin-top: 30px;
}


.email-input {
  /* Add any custom styles for the email input field here */
  /* For example: */
  border: 1px solid gray;
  padding: 5px;
  font-size: 16px;
}

.alert-success{
    color: rgb(0, 193, 0);
    font-size: 30px;
    font-weight: 700;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif
}
    </style>

@endsection




{{--============= showCase ===============--}}
@section('underNav')
@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
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
    <form action="{{route('Contact.store')}}" method="POST">
        @csrf
        <label class="label" for="fname">Name</label>
        @error('Name')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        <input class="input @error('Name') is-invalid @enderror" type="text" id="fname" name="Name" placeholder="Your name.." value="{{ old('Name') }}">
    
        <label class="label" for="email">Email</label>
        @error('Email')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        <input class="input @error('Email') is-invalid @enderror" type="text" id="email" name="Email" placeholder="Your email.." value="{{ old('Email') }}">

        <label class="label" for="phone">Phone Number</label>
        @error('Number')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        <input class="input @error('Number') is-invalid @enderror" type="number" id="phone" name="Number" placeholder="Your phone number" value="{{ old('Number') }}">

        <!-- <label class="label" for="country">Country</label>
        <select id="country" name="country">
        <option value="australia">Australia</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
        </select> -->
    
        <label class="label" for="subject">Subject</label>
        @error('Subject')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        <textarea id="subject" name="Subject" placeholder="Write something.." style="height:200px">{{ old('Subject') }}</textarea>
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
