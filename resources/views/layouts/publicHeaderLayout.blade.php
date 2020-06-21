<!DOCTYPE html>
<html>
<head>
    <title>Movie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ url('/') }}/css/custom.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.4.5.0.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Full Style CSS -->
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">


    <style>
        body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
        .mySlides {display: none}
        .modal-backdrop
        {
            opacity:0.5 !important;
        }
        .font-normal label{
            font-weight: normal;
        }
        .toggle.ios, .toggle-on.ios, .toggle-off.ios { border-radius: 20px; }
        .toggle.ios .toggle-handle { border-radius: 20px; }





    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>





</head>
<body style="overflow-y: scroll;">
<nav class=" navbar navbar-inverse navbar-fixed-top " >
    <div class="container-fluid col-xl-12" style=" alignment: center;"  >
        <a class="navbar-brand w3-left" href="{{ url('/') }}">Movie</a>
        <button type="button"  class="navbar-toggle w3-left" data-toggle="collapse" onclick="sideBar()">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!--<a class="navbar-brand w3-right sticky-top" style="font-size: 14px" href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a>-->
        <a class="navbar-brand w3-right sticky-top small" id="loginVisibility" style="font-size: 14px; display: block" data-toggle="modal" data-target="#login" href="#" ><span class="glyphicon glyphicon-log-in"></span> Login</a>
        <!--
        -------------------------------Right side of Menu bar after Login---------------------------------------
        -->

        <ul class="navbar-brand w3-right sticky-top small" id="profileVisibility" style="padding-left: 0px; padding-top: 0px; display: none">
            <div class="user-area dropdown float-right">
                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="user-avatar rounded-circle" id="profilePhoto" src="" style="border-radius: 50%" alt="User Avatar">
                </a>

                <div class="user-menu dropdown-menu">
                    <a class="nav-link" href="{{ url('/') }}/film/create"><i class="fa fa- user"></i>Add Movie</a>

                    <!-- <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                     <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>-->

                    <a class="nav-link" id="logout" onclick="logout()"><i class="fa fa-power -off"></i>Logout</a>
                </div>
            </div>
        </ul>


    </div>
</nav>

@include('user.login')

@include('user.registration')

@include('user.forgotPassword')

@include('user.passwordReset')


@yield('content')


<script src="{{ url('/') }}/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.4.5.0.min.js"></script>

</body>
</html>
