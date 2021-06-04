<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title-block')</title>
    <link rel="icon" href="/images/food.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet"
        type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="/plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="/plugins/animate-css/animate.css" rel="stylesheet" />
    <link href="/plugins/morrisjs/morris.css" rel="stylesheet" />
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/themes/all-themes.css" rel="stylesheet" />
    
    <script src="https://use.fontawesome.com/138411aad7.js"></script>
</head>

<body class="theme-red">

    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <div class="overlay"></div>
    @include('/admin/inc_adm.header_adm')
    @yield('content')

    <script src="/plugins/jquery/jquery.min.js"></script>
    <script src="/plugins/bootstrap/js/bootstrap.js"></script>
    <script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <script src="/plugins/node-waves/waves.js"></script>
    <script src="/plugins/jquery-countto/jquery.countTo.js"></script>
    <script src="/plugins/raphael/raphael.min.js"></script>
    <script src="/plugins/morrisjs/morris.js"></script>
    <script src="/plugins/chartjs/Chart.bundle.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/plugins/flot-charts/jquery.flot.time.js"></script>
    <script src="/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="/js/admin.js"></script>
    <script src="/js/pages/index.js"></script>
    <script src="/js/demo.js"></script>

    
</body>

</html>
