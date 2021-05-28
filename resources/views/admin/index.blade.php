﻿<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Panel - Food Delivery</title>
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
</head>

<body class="theme-red">
    <!-- Page Loader -->
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
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="{{ asset('admin/index') }}">Food Delivery Management</a>
                <a class="navbar-brand" href="{{ asset('index') }}">Public</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">John Doe</div>
                    <div class="email">john.doe@example.com</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:void(0);"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="{{ asset('admin/index') }}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                </ul>
            </div>
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2021 <a href="javascript:void(0);">Food delivery</a>
                </div>

            </div>
            <!-- #Footer -->
        </aside>

    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Статистика</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">Всього замовлень</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                                data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>   
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person</i>
                        </div>
                        <div class="content">
                            <div class="text">Всього закладів</div>
                            <div class="number count-to" data-from="0" data-to="125" data-speed="15"
                                data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>     
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Всього коментарів</div>
                            <div class="number count-to" data-from="0" data-to="243" data-speed="1000"
                                data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">Відвідувачі сайту</div>
                            <div class="number count-to" data-from="0" data-to="1225" data-speed="1000"
                                data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

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
