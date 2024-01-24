<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset("assets/css/abs-design.css") }}" />
    <link rel="stylesheet" href="{{asset("assets/css/style.css") }}" />
    <link rel="stylesheet" href="{{asset("assets/css/media-query.css") }}" />
    <title>Dashboard</title>
    <style>
        .brand-logo{
            width: 100%;
            height: 100%;
            max-height: 50px;
            max-width: 50px;
        }
        .dash-card{
            height: 90px;
        }
        .dash-container{
            padding: 10px;
        }
    </style>
</head>

<body>

    <div class="">
        <nav class="abs-side-navbar abs-toggle navbar-slideout" id="sidenav">
            <div class="abs-navs text-white" style="text-align: center;">
                <img src="{{asset("assets/images/tradefxlogo.png") }}" class="brand-logo" style="" alt="logo" />
                <span>TRADEFX</span>
            </div>
            <ul class="abs-sidenav-menu">
                <!-- <span class="divider"></span> -->
                <a href="" class="abs-menu-item">
                    <span class="fa fa-dashboard icon"></span>
                    <span class="text">Dashboard</span>
                </a>
                <a href="" class="abs-menu-item">
                    <span class="fa fa-money icon"></span>
                    <span class="text">Teams</span>
                </a>
                <a href="" class="abs-menu-item">
                    <span class="fa fa-credit-card icon"></span>
                    <span class="text">Projects</span>
                </a>
                <a href="" class="abs-menu-item">
                    <span class="fa fa-user icon"></span>
                    <span class="text">Profile</span>
                </a>
                <a href="" class="abs-menu-item">
                    <span class="fa fa-power-off icon"></span>
                    <span class="text">Logout</span>
                </a>
            </ul>
        </nav>
        <div class="main main-slideout" id="main">
            @include("includes.top-nav")
            <!-- CARDS -->
            <div class="dash-container">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold mt-4 mb-1">@yield("title")</h4>
                </div>
                @yield("content")
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset("assets/js/index.js") }}"></script>
</body>
</html>
