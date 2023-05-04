@extends('UserSide.layout.master')

@section('title')

home 

@endsection

@section('css')
<link rel="stylesheet" href="{{asset('user/myCss/Home.css') }}">
@endsection


{{--============= showCase ===============--}}
@section('underNav')
<video autoplay loop muted plays-inline class="Homevid">
    <source src="MasterPiece-Pic/aq12.mp4" type="video/mp4">
</video>

<div class="WelcomeContent">
    <p class="Welcome">Focus on your</p>
    <p class="Welcome1">Trip , Adventure or dreams</p>
    <p class="Welcome2">And leave the planning to <span>US</span></p>
    <span><a href="#Amman">Explore</a></span>
</div>
@endsection

{{--============= contant ===============--}}
@section('content')

<section>
    <h2 id="Amman">Where Are You Going <span>Next</span>?</h2>
    <h2></h2>
    <div class="cards-list">

      <a href="{{route('Amman')}}">
        <div class="card 1">
         <div class="card_image"><img class="imgCard0" src="./MasterPiece-Pic/Amman1.jpg" /></div>
          <div class="card_title title-white">
            <p>Amman</p>
          </div>
        </div>
      
      <a href="#">
        <div class="card 1">
          <div class="card_image_soon"> <img src="./MasterPiece-Pic/Aqaba1.jpg" /> </div>
          <div class="card_title title-white">
            <p>Aqaba..(soon)</p>
          </div>
        </div>
      </a>

      {{-- <a href="#">
        <div class="card 1">
          <div class="card_image"> <img src="./MasterPiece-Pic/Amman1.jpg" /> </div>
          <div class="card_title title-white">
            <p>Irbid</p>
          </div>
        </div>
      </a> --}}
        
          {{-- <div class="card 2">
          <div class="card_image">
            <img src="https://cdn.blackmilkclothing.com/media/wysiwyg/Wallpapers/PhoneWallpapers_FloralCoral.jpg" />
            </div>
          <div class="card_title title-white">
            <p>Card Title</p>
          </div>
        </div>
        
        <div class="card 3">
          <div class="card_image">
            <img src="https://media.giphy.com/media/10SvWCbt1ytWCc/giphy.gif" />
          </div>
          <div class="card_title">
            <p>Card Title</p>
          </div>
        </div>
          
          <div class="card 4">
          <div class="card_image">
            <img src="https://media.giphy.com/media/LwIyvaNcnzsD6/giphy.gif" />
            </div>
          <div class="card_title title-black">
            <p>Card Title</p>
          </div>
          </div> --}}
        
        </div>
    {{-- <div class="container">

        <div class="card">
            <a href="./Amman.html" target="_blank">
                <div class="cardImage Pic1"></div>
                <p>Amman</p>
            </a>
        </div>
            
        <div class="card">
            <a href="#">
                <div class="cardImage Pic2"></div>
                <img src="./MasterPiece-Pic/Amman1.jpg">
                <p>Aqaba</p>
            </a>
        </div>
        
        <div class="irbdCard">
            <a id="soonIrbid" href="#soonIrbid">
                <div class="cardImage Pic3"></div>
                <p>Irbid <span>(Coming Soon!)</span></p>
            </a>
        </div>
    </div>
 --}}
        <div class="section1-2">
            <p>Great offers waiting you on <span>FULL TRIP</span> program !</p></div>
            <div class="grid2">
                
                <div class="rectangle">
                </div>

                <div class="square offerG1">
                    <div class="Sec2headers"></div>
                        <p>4 days in Seas Hotel</p>
                </div> 
                
                
                <div class="square offerG2">
                    <div class="Sec2headers"></div>
                        <p>Tourism around Amman (old town, Malls)</p>
                </div> 
                
                <div class="square offerG3">
                    <div class="Sec2headers"></div>
                        <p>Transportation from anywhere to Amman</p>
                </div> 
                <div class="square offerG4">
                    <div>
                        <p>full travel program to Amman for only <span>349</span> JOD!</p>
                   
                        <p class="moreInfo1">for more info talk to us</p>
                        
                        <a href="{{route('contact')}}">Contact us</a>
                    </div>
                </div>
            </div>
    </section>

@endsection
@section('scroll')

<span class="up"> <i class="fa-solid fa-up-long"></i></span>

@endsection
@section('script')



@endsection