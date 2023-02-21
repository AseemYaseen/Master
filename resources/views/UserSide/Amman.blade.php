@extends('UserSide.layout.master')

@section('title')


@endsection

@section('css')

<link rel="stylesheet" href="{{asset('user/myCss/Amman.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
@endsection


{{--============= showCase ===============--}}
@section('underNav')
<div class="WelcomeContent">
    <h1 class="Welcome"><span>an</span></h1>
 </div>
@endsection

{{--============= contant ===============--}}
@section('content')
<section class="Section2">
    <div class="centerInfoAmman">
        <h2>Some Financial Facts About <span>Amm</span>an</h2>
        <div class="flexAmman1">

            <table>
                <tr>
                    <td><p><span>A</span>partment (1 bedroom) in City Centre </p></td>
                    <td><p> Monthly <span>250.50 JOD</span></p></td>
                </tr>
                <tr>
                        <td><p><span>A</span>partment (1 bedroom) Outside of Centre </p></td>

                        <td><p> Monthly <span>191.26 JOD</span></p></td>
                </tr>
                <tr>
                    <td><p><span>A</span>partment (3 bedrooms) in City Centre </p></td>

                    <td><p> Monthly <span>434.36 JOD</span></p></td>
                </tr>
                <tr>
                    <td><p><span>A</span>partment (3 bedrooms) Outside of Centre </p></td>

                    <td><p> Monthly <span>327.48 JOD</span></p></td>
                </tr>
                <tr>
                    <td><p><span>M</span>eal , Inexpensive Restaurant</p></td>

                    <td><p> (Avarege) <span>4.50 JOD</span></p></td>
                </tr>
                <tr>
                    <td><p><span>M</span>eal for 2 people, Mid range Restaurant, Three-course</p></td>

                    <td><p>(Avarege) <span>30.00 JOD</span></p></td>
                </tr>
                <tr>
                    <td><p><span>Source</span> : <a href="https://www.numbeo.com/cost-of-living/in/Amman" target="_blank">www.numbeo.com/cost-of-living/in/Amman</a></p></td>

                </tr>
            </table>

        </div>
    </div>
</section>

<section class="section3Amman">
        <h2>Make Your Choices !</h2>
        <div class="selectFlex">
            <div class="Select1">
                <p>My budget is :</p>
                <select>
                <option>Under 100 JOD</option>
                <option>From 100-300 JOD</option>
                <option>From 300-700 JOD</option>
                <option>More than 700 JOD</option>
                </select>
            </div>

            <div class="Select2">
                <p>I'm staying for :</p>
                <select>
                <option>1 Day</option>
                <option>2 - 5 Days</option>
                <option>6 - 10 Days</option>
                <option>+ 10 Days</option>
                </select>
            </div>
        </div>
           <a class="showResult" href="./results.html">ShowResults</a>       
</section>  

@endsection
@section('scroll')


@endsection
@section('script')



@endsection