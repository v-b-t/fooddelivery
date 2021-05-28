<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title-block')</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    {{-- <link href="/plugins/bootstrap/css/bootstrap.css" rel="stylesheet"> --}}
    <script src="https://use.fontawesome.com/138411aad7.js"></script>
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="icon" href="/images/32382hamburger_98925.ico" />
</head>
<style>
    html,
    body {
        height: 100%;
        margin: 0;
    }

</style>

<body>
    @include('inc.header')
    <div class="wrapper">
        <div class="container" style="margin-top: 75px;">
            @include('inc.messages')
        </div>

        @if (Request::is('index'))
            <div class="container-fluid mt-4 mb-3">
                <div class="col-12" >
                    <div class="row">
                        <div class="col-4" >
                            @include('inc.aside')
                        </div>
                        <div class="col-8">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if (Request::is('/'))
            @yield('welcome')
        @endif

        @if (Request::is('contacts'))
            <div class="container">
                <div class="row justify-content-center">
                    @yield('contact')
                </div>
            </div>
        @endif

        @if (Request::is('cart'))
            <div class="container">
                @yield('cart')
            </div>
        @endif

        @if (Request::is('cart/checkout'))
            <div class="container">
                @yield('checkout')
            </div>
        @endif

        @if (Request::is('products'))
            <div class="container-fluid">
                <div class="col-12">
                    <div class="row">
                        <div class="col-4">
                            @include('inc.aside_user')
                        </div>
                        <div class="col-8">
                            @yield('products')
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div class="push"></div>
    </div>
    @include('inc.footer')

</body>

</html>
