<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Reto Evertec ::</title>
    <link rel="stylesheet" href="/assets/layout/assets/plugins/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/layout/assets/plugins/waitme/waitMe.css" />
    <link rel="stylesheet" href="/assets/layout/css/main.css">
    <link rel="stylesheet" href="/assets/layout/css/color_skins.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <!-- <script src="https://kit.fontawesome.com/4430858604.js" crossorigin="anonymous"></script> -->
</head>

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <p>Cargando...</p>
            <!-- <div class="m-t-30"><img src="assets/layout/assets/images/logo.svg" width="48" height="48" alt="Nexa"></div> -->
        </div>
    </div>

    <!-- Top Bar -->
    <nav class="navbar">

        <div class="col-12">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" >EVERTEC</a>
            </div>

            <ul class="nav navbar-nav navbar-left">
                <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="fas fa-exchange-alt"></i></a></li>

            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="mega-menu xs-hide" href="{{ route('logout') }}" data-close="true" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-power-off"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
            </ul>
        </div>
    </nav>

    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">

        <!-- Menu -->
        <div class="menu">
            <ul class="list">

                <div class="user-info" style="height: 50px">
                    <div class="info-container">
                        <h6>{{ Auth::user()->name }}</h6>
                    </div>
                </div>
                <!--glyphicon glyphicon-user-->

                @if(Auth::user()->rol == 1 )
                <li><a href="/clientes"><i class="fas fa-user-friends"></i><span>Clientes</span> </a></li>
                @endif
                <li><a href="/catalogo"><i class="fas fa-user-friends"></i><span>Catálogo</span> </a></li>
 

            </ul>
        </div>
        <!-- #Menu -->
    </aside>

    <!-- Main Content -->
    @yield('contenido')

    <script src="/assets/layout/assets/bundles/libscripts.bundle.js"></script>
    <script src="/assets/layout/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="/assets/layout/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script src="/assets/layout/assets/bundles/countTo.bundle.js"></script>
    <script src="/assets/layout/assets/bundles/knob.bundle.js"></script>
    <script src="/assets/layout/assets/bundles/sparkline.bundle.js"></script>
    <script src="/assets/layout/assets/plugins/waitme/waitMe.js"></script>
    <script src="/assets/layout/js/pages/widgets/infobox/infobox-1.js"></script>
    <script src="/assets/layout/assets/bundles/mainscripts.bundle.js"></script>
    <script src="/assets/layout/js/pages/charts/jquery-knob.js"></script>
    <script src="/assets/layout/js/pages/charts/sparkline.js"></script>
    <script src="/assets/layout/js/pages/cards/basic.js"></script>

    @yield('script')
</body>

</html>