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
    @include('inc.messages')
    @yield('content')
    <div class="push"></div>
    </div>
    @include('inc.footer')
</body>
</html>
