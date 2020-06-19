<!DOCTYPE html>
<html>
<head>
    <title>Movie</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/assets/css/newStyle.css">

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
        .pagination>li>a {
            border-radius: 50% !important;
            margin: 0 5px;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body style="overflow-y: scroll;">
<nav class=" navbar navbar-inverse navbar-fixed-top " >
    <div class="container-fluid col-xl-12" style=" alignment: center; max-width: 1000px" >
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
                    <a class="nav-link" href="{{ url('/') }}/profile"><i class="fa fa- user"></i>My Profile</a>

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


<div class="w3-content w3-border-left w3-border-right font-normal" style=" font-weight: normal">


    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-Xlarge" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->

    <div class="w3-main w3-white " style=" margin-top: 56px">
        <div class="w3-container" id="posts">

            <!--<div class="col-md-12 col-sm-12 ftco-animate d-md-flex " style="padding-top: 10px; text-align: center;" >
                 <ul class="pagination">
                     <li class="page-item "><a class="page-link" href="#">1</a></li>
                     <li class="page-item" style="border: none"><a class="page-link" href="#" style="border: none; margin: 0px; padding-left: 0px; padding-right: 3px"> . . . . </a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item active"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                     <li class="page-item" style="border: none"><a class="page-link" href="#" style="border: none; margin: 0px; padding-left: 0px; padding-right: 3px"> . . . . </a></li>
                     <li class="page-item"><a class="page-link" href="#">7</a></li>
                 </ul>
            </div>-->
        </div>
        <!-- End page content -->
    </div>
</div>
<script src="{{ url('/') }}/js/staticText.js"></script>
<script src="{{ url('/') }}/js/common.js"></script>
<script src="{{ url('/') }}/js/pagination.js"></script>


</body>
</html>

<script>
    serverPostRequest()
    function serverPostRequest() {
        var method = 'GET';
        var url = project_url+'api/v1/all/movie';
        var request = httpRequest(method, url , '');
        var data = JSON.parse(request.response);
        var htmlData = '';
        for(var i = 0; i<data['data']['data'].length; i++){
            htmlData = htmlData + htmlPostDataGenerator(data['data']['data'][i])
        }
        var pagination = paginationGenarator(data['data'])
        document.getElementById('posts').innerHTML = htmlData + pagination;
        //alert(data[0]['data'])
    }

    function getPostData(url) {
        url = project_url+'api/v1/all/movie?page='+ url;

        //alert(url)
        var request = httpRequest('GET', url, '');
        var data = JSON.parse(request.response);
        var htmlData = '';
        for(var i = 0; i<data['data']['data'].length; i++){
            htmlData = htmlData + htmlPostDataGenerator(data['data']['data'][i])
        }
        //alert(htmlData)
        var pagination = paginationGenarator(data)
        document.getElementById('posts').innerHTML = htmlData + pagination;

    }

    function htmlPostDataGenerator(data) {

        var html = '<div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >\n' +
            '                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">\n' +
            '                    <a href="#" class="img img-2">\n' +
            '                        <img src='+project_url+data["photo"] +' style=" max-width: 200px; max-height:170px;">\n' +
            '                    </a>\n' +
            '                </div>\n' +
            '                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">\n' +
            '                    <h4 class="mb-2"><a href="'+project_url+'film/'+ data["slug"]["slug"]+'" name="title">'+ data["name"]+'</a></h4>\n' +
            '                    <div class="text text-2 pl-md-4">\n' +
            '                        <div class="meta-wrap">\n' +
            '                            <p class="meta">\n' +
            '                                <span name="date"><i class="icon-calendar mr-2"></i>'+ data["date"]+'</span>\n' +
            '                                <span class="text-primary" style="font-weight: bold" name="type"><i class="mr-2 "></i>'+ data["genre"][0]["name"]+'</span>\n' +
            '                            </p>\n' +
            '                        </div>\n' +
            '                        <p class="mb-4" name="area">'+ data['description'].slice(0,300)+'. . .</p>\n' +
            '                        <div class="meta-wrap">\n' +
            '                            <label class="text-primary" name="status" ></label>\n' +
            '                            <label style="float: right; display: block" name><i class="fa fa-heart-o" style="font-size:24px;" ></i></label>\n' +
            '                            <label style="float: right; display: none "><i class="fa fa-heart" style="font-size:24px; color: blueviolet"></i></label>\n' +
            '\n' +
            '                        </div>\n' +
            '                    </div>\n' +
            '                </div>\n' +
            '            </div>\n'
        return html;
    }

</script>
