<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Travelers-Jo | @yield('title')</title>
        @include('Userside.layout.head')

    </head>
    <body>
        <div class="Head">


         @include('Userside.layout.navBar')
         
         
         @yield('underNav')
         
         
        </div>
        
        {{-- content --}}
        
        
        @yield('content')
        
        
        @include('Userside.layout.footer')

        @include('Userside.layout.footer-script')
    
        </body>
    </html>