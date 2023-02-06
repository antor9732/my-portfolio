<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="{{asset('css/dashboard_style.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
       {{-- Header Section Start --}}

     @include('layouts.partials.admin_header')

        {{-- Header Section Stop --}}


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">

            {{-- Sidebar Section Start --}}

            @include('layouts.partials.admin_sidebar')

            {{-- Sidebar Section Stop --}}

            </div>
            <div id="layoutSidenav_content">

              {{-- Main Section Start --}}

             @yield('content')

             {{-- Main Section Stop --}}

             {{-- Footer Section Start --}}

             @include('layouts.partials.admin_footer')

               {{-- Footer Section Stop --}}
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js/dashboard_scripts.js')}}"></script>
    </body>
</html>
