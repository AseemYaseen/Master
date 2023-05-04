@extends('UserSide.layout.master')

@section('title')

result

@endsection

@section('css')
<link rel="stylesheet" href="{{asset('user/myCss/results.css') }}">

@endsection


{{--============= showCase ===============--}}
@section('underNav')

@endsection

{{--============= contant ===============--}}
@section('content')

<h1 class="headerResults">What we have found on your choices :</h1>

        <div class="choices">
            <p>{{$lastResult->stay}}</p>
            <p>{{$lastResult->budget_Range}}JD</p>
            <a href="./Home.html">Want to make another choice?</a>
        </div>
        <section class="section2Results">    
            <div class="result1">
                <h2>Apartments</h2>
                <div class="resultsCenter">
                        @foreach ($appartments as $appartment)
                        <figure>
                            <img class="imageApar" src="{{URL::asset("storage/image/$appartment->image")}}">
                            <figcaption><p class="descriptionApar">{{$appartment->description}}</p>
                                <p class="locationApar">{{$appartment->location}}</p>
                                <p class="priceApar">For <span>{{$appartment->price}} JD</span> per nigh</p>
                            </figcaption>
                        </figure>
                        @endforeach
                    </div>
                    <p class="avalSure">did you like a place and want to make sure it's avalible?</p>
                    <a href="./contact_us.html" class="contactApar">Contact us</a>
                </div>
            </section>

            <p class="headerResults">I found a place to stay so what next ?</p>
            <div class="choices2">
                <p>it's time to take a look where can I <span>EAT</span> and stay within my budget !</p>
            </div>
            <section class="section2Results">
                <div class="result1">
                    <h2>Restaurants</h2>
                    <div class="resultsCenter">
                        @foreach ($restaurants as $restaurant)
                        <figure>
                            <img class="imageApar" src="{{URL::asset("storage/image/$restaurant->image")}}">
                            <figcaption><p class="nameRest">{{$restaurant->name}}</p>
                            <figcaption><p class="descriptionApar">{{$restaurant->description}}</p>
                                <p class="locationApar">{{$restaurant->location}}</p>
                                <p class="priceApar">From <span>{{$restaurant->price}} JOD</span> per meal</p>
                            </figcaption>
                        </figure>
                        @endforeach

                        {{-- <figure>
                            <img class="imageApar" src="./MasterPiece-Pic/Results/Shahrazad.png" alt="Apar">
                            <figcaption><p class="descriptionApar">Shahrazad Restaurant Mosbah</p>
                                <p class="locationApar">Located in Downtown, Amman</p>
                                <p class="priceApar">From <span>2.5 JOD</span> per meal</p>
                            </figcaption>
                        </figure>

                        <figure>
                            <img class="imageApar" src="./MasterPiece-Pic/Results/ManoushaBasha.png" alt="Apar">
                            <figcaption><p class="descriptionApar">Manoush Basha</p>
                            <p class="locationApar">Wadi Saqra st, Amman</p>
                            <p class="priceApar">From <span>1.5 JOD</span> per meal</p>
                            </figcaption>
                        </figure> --}}
                    </div>
                </div>
            </section>
            <p class="headerResults funActiv">Some of more fun activites you can do in Amman ! :</p>

            <!-- <section class="slider1">
                <div class="container1">
                    <div class="slider">
                        <input type="radio" class="radio" name="images" id="radio-1" checked>
                        <input type="radio" class="radio" name="images" id="radio-2">
                        <input type="radio" class="radio" name="images" id="radio-3">
                        <div class="slide" id="slide-1">
                            <img src="./MasterPiece-Pic/Results/escape-the-room-jordan.jpg">
                            <div class="caption"><span>Escape room</span></div>
                        </div>
                        <div class="slide" id="slide-2">
                            <img src="./MasterPiece-Pic/Results/indoor-karting-by-manja.jpg">
                            <div class="caption"><span>amman carting</span></div>
                            <div class="sliderParag"><span>Racing experience in the center of Amman! 
                                For more info 0790999777.</span></div>
                        </div>
                        <div class="slide" id="slide-3">
                            <img src="./MasterPiece-Pic/Results/escape-the-room-jordan.jpg">
                            <div class="caption"><span>Escape room</span></div>
                        </div>

                        <div class="dots">
                            <label for="radio-1" id="label-1"></label>
                            <label for="radio-2" id="label-2"></label>
                            <label for="radio-3" id="label-3"></label>
                        </div>
                    </div>
                </div>
            </section> -->
        <section>
            <div class="slider">
                <input type="radio" name="slide" id="slide-1" checked>
                <input type="radio" name="slide" id="slide-2">
                <input type="radio" name="slide" id="slide-3">
        
                <div class="slides">
                    <div class="slide slide-1">
                        <div class="slide-data">
                            <h1>ESCAPE THE ROOM</h1>
                            <P>Is a fun, new entertainment concept and is the first of its kind in Jordan. Each Escape Room is a real life adventure game designed for small groups.</P>
                            <p>For more info call : 0776823453</p>
                        </div>
                    </div>
                    <div class="slide slide-2">
                        <div class="slide-data">
                            <h1>Manja Underground Karting</h1>
                            <P>Racing experience in the center of Amman! , Indoor karting circuit by Manja International Circuit at P4 level of Taj Mall. </P>
                            <p>For more info 0790999777</p>
                        </div>
                    </div>
                    <div class="slide slide-3">
                        <div class="slide-data">
                            <h1>The Terminal VR Gaming Center</h1>
                            <P>Where you can have a new and amazing experience in the virtual world alot of fun is waiting you here</P>
                            <p>For more info 0778079491</p>
                        </div>
                    </div>
                </div>
        
                <div class="arrows arrow-left">
                    <label for="slide-3">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                    <label for="slide-1">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                    <label for="slide-2">
                        <span><i class="fas fa-angle-left"></i></span>
                    </label>
                </div>
        
                <div class="arrows arrow-right">
                    <label for="slide-2">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                    <label for="slide-3">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                    <label for="slide-1">
                        <span><i class="fas fa-angle-right"></i></span>
                    </label>
                </div>
        
                <div class="dots">
                    <label for="slide-1"></label>
                    <label for="slide-2"></label>
                    <label for="slide-3"></label>
                </div>
            </div>
        </section>

        <p class="headerResults">Summary :</p>
        <section class="summarySec">

            <div class="summaryImg">
                <img src="./MasterPiece-Pic/Results/summary.png">
            </div>
            <div class="summaryInfo">
                <table>
                    <p id="summaryTable"></p>
                    
                    <tr>
                        <td><p class="avarege4">in avarege 1 person for {{$lastResult->stay}} day(s) in Amman Need about <span>{{$LowestPlus}}</span> to <span>{{$highestPlus}}</span> JOD Or <span>{{$AverPlus}}</span> JOD per day for choices like:
                        </p></td>
                    </tr>
                    <tr>
                        <td>
                            <ul class="ulResults">
                            <li>Apartment for around <span>{{$AparaveragePrice}}</span> JOD per day</li>
                            <li><span>{{$RestaveragePrice}}</span> JOD restaurant price per meal</li>
                            <li><span>15</span> JOD for other activites (fun , transportation, Other .. )</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
        </section>
    <section class="lastSection">
                <p class="headerResults5">Do you want even simpler solution for your trip?</p>
                <div class="centerLast">
                    <h4>try our full travel programe to Amman for <span>329</span>JOD!</h4>
                    <p>which includes :</p>
                </div>
                <div class="tripFlex">
                    <div class="tripBox">
                        <p>1-from any where in Jordan to Amman</p>
                        <p>2-Five days in 4 stars hotel room for 3 persons</p>
                        <p>3-Two meals in day (breakfast , Lunch)</p>
                        <p>4-Tourism program around Amman (old town , Malls)</p>
                        <p>And there is more !</p>
                        <a href="./contact_us.html" class="contactApar3">Contact us</a>
                    </div>
                </div>
     </section>

@endsection
@section('scroll')

<span class="up"> <i class="fa-solid fa-up-long"></i></span>

@endsection
@section('script')



@endsection