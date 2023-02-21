@extends('UserSide.layout.master')
@section('title')
   
@endsection
@section('css')
    
@endsection


{{--============= showCase ===============--}}
@section('showCase')

@endsection

{{--============= contant ===============--}}
@section('contant')
<section>
    <h2 id="Amman">Where Are You Going <span>Next</span>?</h2>
    <h2></h2>
    <div class="container">

        <div class="card">
            <a href="./Amman.html" target="_blank">
                <div class="cardImage Pic1"></div>
                <p>Amman</p>
            </a>
        </div>
            
        <div class="card">
            <a href="#">
                <div class="cardImage Pic2"></div>
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
                        
                        <a href="./contact_us.html">Contact us</a>
                    </div>
                </div>
            </div>
    </section>
@endsection

