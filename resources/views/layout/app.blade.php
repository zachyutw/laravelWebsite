<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel Test</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        <div class="content">
            @if(Request::is('/'))
          @include('inc.showcase') @endif

          
            <div class="row">
               <div class="container text-center" >
                 @include('inc.message') 
                </div>
                 @yield('content')
                 @yield('sidebar')
                
            </div>
        </div>
    </div>
    <footer id="footer" class="text-center">
        <p>Copyright 2018 &copy;</p>
    </footer>
    <script src="holder.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>