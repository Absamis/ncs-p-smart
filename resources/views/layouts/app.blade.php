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
        p{
            padding: 0;
        }
    </style>
</head>

<body>

    <div class="">
        <nav class="abs-side-navbar abs-toggle navbar-slideout" id="sidenav">
            <div class="abs-navs text-white" style="text-align: center;">
                <svg width="160" height="30" viewBox="0 0 193 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.9686 10.7452C21.7895 8.5662 18.2504 8.57239 16.0637 10.7591C13.8771 12.9457 13.8709 16.4848 16.0499 18.6639C18.229 20.8429 21.7681 20.8367 23.9547 18.6501C26.1414 16.4634 26.1476 12.9243 23.9686 10.7452Z" fill="white"/>
                    <path d="M2.45773 18.2214C2.32838 17.5618 2.85241 16.9704 3.52497 16.9693L9.30168 16.9591C9.82383 16.9582 10.2694 17.3212 10.4288 17.8178C10.9001 19.2864 11.7179 20.6668 12.8825 21.8314C16.8048 25.7536 23.1752 25.7425 27.1112 21.8065C28.2799 20.6378 29.1025 19.2545 29.579 17.7843C29.7401 17.2871 30.1868 16.9227 30.709 16.9217L36.4858 16.9116C37.1583 16.9105 37.6802 17.5 37.5487 18.16C36.879 21.5181 35.2408 24.7243 32.6349 27.3302C25.6375 34.3275 14.3124 34.3473 7.33946 27.3744C4.7426 24.7775 3.1156 21.5771 2.45773 18.2214Z" fill="white"/>
                    <path d="M46.268 39.876V14.388H50.156V16.908H50.228C51.38 14.748 53.576 13.884 55.988 13.884C61.856 13.884 64.7 18.312 64.7 23.784C64.7 28.824 62.144 33.504 56.672 33.504C54.296 33.504 51.704 32.64 50.444 30.588H50.372V39.876H46.268ZM60.596 23.712C60.596 20.364 58.832 17.124 55.448 17.124C51.992 17.124 50.228 19.716 50.228 23.712C50.228 27.456 52.136 30.264 55.448 30.264C59.192 30.264 60.596 26.952 60.596 23.712ZM67.4478 33V14.388H71.2998V17.988H71.3718C71.8398 16.008 74.3238 13.884 76.8078 13.884C77.7798 13.884 77.9598 13.956 78.3558 13.992V17.952C77.7798 17.844 77.1678 17.772 76.5918 17.772C73.8198 17.772 71.5518 20.004 71.5518 24.144V33H67.4478ZM87.2833 33.504C81.3433 33.504 77.8873 29.4 77.8873 23.676C77.8873 18.024 81.3433 13.884 87.2833 13.884C93.2233 13.884 96.6793 18.024 96.6793 23.676C96.6793 29.4 93.2233 33.504 87.2833 33.504ZM87.2833 30.264C90.9553 30.264 92.5753 26.916 92.5753 23.676C92.5753 20.472 90.9553 17.124 87.2833 17.124C83.6113 17.124 81.9913 20.472 81.9913 23.676C81.9913 26.916 83.6113 30.264 87.2833 30.264ZM99.4791 11.184V7.296H103.583V11.184H99.4791ZM99.4791 34.404V14.388H103.583V34.584C103.583 38.292 102.107 40.38 98.2551 40.38C97.4271 40.38 96.9591 40.344 96.4191 40.236V36.996C96.9591 37.104 97.4271 37.14 97.8231 37.14C99.2991 37.14 99.4791 36.24 99.4791 34.404ZM110.539 22.056H120.115C119.935 19.464 118.243 17.124 115.435 17.124C112.591 17.124 110.647 19.284 110.539 22.056ZM124.219 24.756H110.539C110.539 27.672 112.123 30.264 115.543 30.264C117.955 30.264 119.359 29.22 120.079 27.168H123.967C123.103 31.236 119.575 33.504 115.543 33.504C109.675 33.504 106.435 29.472 106.435 23.712C106.435 18.42 109.891 13.884 115.435 13.884C121.303 13.884 124.903 19.176 124.219 24.756ZM143.287 20.616H139.183C138.859 18.312 137.239 17.124 134.935 17.124C132.811 17.124 129.823 18.276 129.823 23.892C129.823 26.988 131.191 30.264 134.755 30.264C137.167 30.264 138.787 28.716 139.183 26.016H143.287C142.531 30.876 139.543 33.504 134.755 33.504C128.923 33.504 125.719 29.364 125.719 23.892C125.719 18.276 128.779 13.884 134.899 13.884C139.219 13.884 142.891 16.044 143.287 20.616ZM144.031 17.448V14.388H147.127V8.808H151.231V14.388H154.939V17.448H151.231V27.384C151.231 29.076 151.375 29.94 153.211 29.94C153.787 29.94 154.363 29.94 154.939 29.796V32.964C154.039 33.072 153.175 33.18 152.275 33.18C147.955 33.18 147.235 31.524 147.127 28.428V17.448H144.031ZM157.279 11.184V7.296H161.383V11.184H157.279ZM157.279 33V14.388H161.383V33H157.279ZM163.298 17.448V14.388H166.358V12.84C166.358 8.088 168.842 7.296 171.506 7.296C172.838 7.296 173.774 7.368 174.386 7.548V10.752C173.846 10.608 173.306 10.536 172.478 10.536C171.362 10.536 170.462 10.932 170.462 12.48V14.388H173.954V17.448H170.462V33H166.358V17.448H163.298ZM180.774 32.928L173.718 14.388H178.218L183.078 28.284H183.15L187.866 14.388H192.15L184.914 34.008C183.582 37.356 182.646 40.38 178.326 40.38C177.354 40.38 176.418 40.308 175.482 40.164V36.708C176.166 36.816 176.742 36.96 177.426 36.96C179.298 36.96 179.838 35.952 180.306 34.368L180.774 32.928Z" fill="white"/>
                    </svg>
            </div>
            <ul class="abs-sidenav-menu">
                <!-- <span class="divider"></span> -->
                <a href="{{route("dashboard")}}" class="abs-menu-item">
                    <span class="fa fa-dashboard icon"></span>
                    <span class="text">Dashboard</span>
                </a>
                <a href="{{route("teams")}}" class="abs-menu-item">
                    <span class="fa fa-users icon"></span>
                    <span class="text">Team</span>
                </a>
                <a href="{{route("projects")}}" class="abs-menu-item">
                    <span class="fa fa-folder-open icon"></span>
                    <span class="text">Projects</span>
                </a>
                <a href="{{route("task-review")}}" class="abs-menu-item">
                    <span class="fa fa-tasks icon"></span>
                    <span class="text">Task Review</span>
                </a>
                <a href="{{route("task-review")}}" class="abs-menu-item">
                    <span class="fa fa-bar-chart icon"></span>
                    <span class="text">Metrics</span>
                </a>
                <a href="{{route("profile")}}" class="abs-menu-item">
                    <span class="fa fa-user icon"></span>
                    <span class="text">Profile</span>
                </a>
                <a href="" class="abs-menu-item" style="position: fixed;bottom:10%;">
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
