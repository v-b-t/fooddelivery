<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
<body>
    @include('inc.header')

    <div class="container mt-4">
        @include('inc.messages')
    </div>

    @if(Request::is('index'))
    <div class="container mt-4 mb-3">
        <div class="row">
            <div class="col-4">
                @include('inc.aside')
            </div>
            <div class="col-8">
                @yield('content')
            </div>

        </div>
    </div>
    @endif
    @if(Request::is('/'))
    @yield('welcome')
    @endif
    @if(Request::is('contacts'))
    <div class="container">
        <div class="row justify-content-center">
            @yield('contact')
        </div>
        
    </div>
    
    @endif
    @include('inc.footer')

</body>
</html>
<script src="https://use.fontawesome.com/cfc156340e.js"></script>