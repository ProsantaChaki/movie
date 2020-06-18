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
        <a class="navbar-brand w3-left" href="{{ url('/') }}/post">Movie</a>
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

        <!--
        -------------------------------Left side of Menu bar ---------------------------------------

        <ul class="nav navbar-nav collapse navbar-collapse" id="myNavbar" style="margin-top: 0px" >
            <li class="active"><a href="{{ url('/') }}post">Home</a></li>
        </ul>-->

    </div>
</nav>

@include('user.login')

@include('user.registration')

@include('user.forgotPassword')

@include('user.passwordReset')


<div class="w3-content w3-border-left w3-border-right font-normal" style=" font-weight: normal">


    <!-- Sidebar/menu -->
    <!--   <nav class="w3-sidebar w3-light-grey w3-collapse w3-top " style="z-index:3;width:260px; margin-top: 56px; " id="mySidebar">


           <div class="w3-container w3-display-container w3-padding-16 overflow-auto " style="overflow-y: scroll; height: 93vh; ">
               <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-transparent w3-display-topright"></i>
               <h3>Filters</h3>
               <div class="row form-group" >
                   <div class="col col-md-12"><label for="sortby" class=" form-control-label">Sort Results By</label></div>
                   <div class="col-12 col-md-12">
                       <select name="sortby" id="sortby" class="form-control-sm form-control">
                           <option value="">Please select</option>
                           <option value="Date">Date</option>
                           <option value="Popularity">Popularity</option>
                           <option value="Quality">Quality</option>
                       </select>
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col col-md-12">
                       <label class=" form-control-label" style="font-weight: bold">Type of Post</label>
                   </div>
                   <div class="col col-md-12">
                       <div class="form-check" id="typeof">
                           <div class="custom-control custom-radio">
                               <input type="radio" id="donate" name="typeofvalue" value="" class="custom-control-input">
                               <label for="donate" class="form-check-label " >
                                   All Post
                               </label>
                           </div>
                           <div class="custom-control custom-radio">
                               <input type="radio" id="donate" name="typeofvalue" value="Want to Donate" class="custom-control-input">
                               <label for="donate" class="form-check-label " >
                                   Available Items
                               </label>
                           </div>
                           <div class="custom-control custom-radio ">
                               <input type="radio" id="help" name="typeofvalue" value="Asking For Donation" class="custom-control-input">
                               <label for="help" class="form-check-label ">
                                   Required Items
                               </label>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="row form-group">
                   <div class="col col-md-12"><label class=" form-control-label" style="font-weight: bold">Category</label></div>
                   <div class=" col-md-12">
                       <div class="control-group"  id="category">
                           <div class="custom-control custom-checkbox ">
                               <input type="checkbox" class="custom-control-input" id="1" name="catagory[]" value="Education">
                               <label class="custom-control-label" for="customCheck">Education</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="2" name="catagory2" value="Cloths">
                               <label class="custom-control-label" for="customCheck">Cloths </label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="3" name="catagory3" value="Sports">
                               <label class="custom-control-label" for="customCheck">Sports</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="4" name="catagory4" value="Home Appliances">
                               <label class="custom-control-label" for="customCheck">Home Appliances </label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="5" name="catagory5" value="Food">
                               <label class="custom-control-label" for="customCheck">Food</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="6" name="catagory6" value="Hobby">
                               <label class="custom-control-label" for="customCheck">Hobby</label>
                           </div>
                           <div class="custom-control custom-checkbox mb-3">
                               <input type="checkbox" class="custom-control-input" id="6" name="catagory7" value="Others">
                               <label class="custom-control-label" for="customCheck">Others</label>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="row form-group" style="display: none">
                   <div class="col col-md-12"><label for="sub-category" class=" form-control-label" style="font-weight: bold">Sub-Category</label></div>
                   <div class="col-12 col-md-12">
                       <select name="sub-category" id="sub_category" class="form-control-sm form-control">
                       </select>
                   </div>
               </div>
               <div class="row form-group">
                   <div class="col col-md-12"><label for="division" class=" form-control-label" style="font-weight: bold">Division</label></div>
                   <div class="col-12 col-md-12">
                       <select name="division" id="division" class="form-control-sm form-control">
                           <option value="0">Please select</option>
                           <option value="Dhaka">Dhaka</option>
                           <option value="Khulna">Khulna</option>
                           <option value="Chittagong">Chittagong</option>
                           <option value="Sylhet">Sylhet</option>
                           <option value="Barisal">Barisal</option>
                           <option value="Rajshahi">Rajshahi</option>
                       </select>
                   </div>
               </div>
               <div class="row form-group">
                   <div class="col col-md-12"><label for="district" class=" form-control-label" style="font-weight: bold">District</label></div>
                   <div class="col-12 col-md-12">
                       <select name="district" id="district" class="form-control-sm form-control">
                           <option value="0">Please select</option>

                       </select>
                   </div>
               </div>

           </div>


       </nav>
   -->
    <!-- Top menu on small screens
    <footer class="w3-bar w3-bottom w3-hide-large w3-small">
        <a style="border-radius: 20px ;" href="javascript:void(0)" class="w3-right w3-bar-item w3-button w3-gray w3-large"  onclick="w3_open() ">Filter</a>
    </footer>-->

    <!-- Overlay effect when opening sidebar on small screens -->
    <div class="w3-overlay w3-hide-large w3-Xlarge" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

    <!-- !PAGE CONTENT! -->

    <div class="w3-main w3-white " style=" margin-top: 56px">
        <div class="w3-container" id="posts">


            <!-- Push down content on small screens -->
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#" name="title">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <p class="mb-4" name="sub_title">A small river named Duden flows by their place.</p>
                        <div class="meta-wrap">
                            <p class="meta">
                                <span name="date"><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span class="text-primary" style="font-weight: bold" name="type"><i class="mr-2 "></i>Available Item</span>
                            </p>
                        </div>
                        <p class="mb-4" name="area">Mirpur, Dhaka, Dhaka,1215</p>
                        <div class="meta-wrap">
                            <label class="text-primary" name="status" >Avalible</label>
                            <label style="float: right; display: block" name><i class="fa fa-heart-o" style="font-size:24px;" ></i></label>
                            <label style="float: right; display: none "><i class="fa fa-heart" style="font-size:24px; color: blueviolet"></i></label>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom">Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex w3-light-grey" style="margin-bottom: 10px; padding-top: 10px; padding-bottom: 10px" >
                <div  class="col-xl-4 col-lg-4 col-md-4 col-sm-4 " style="alignment: left">
                    <a href="single.html" class="img img-2">
                        <img src="images/image_1.jpg" style="height: auto; width: 100%; max-width: 300px; ">
                    </a>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8" style="alignment: right;">
                    <h4 class="mb-2"><a href="#">A Loving Heart is the Truest Wisdom</a></h4>
                    <div class="text text-2 pl-md-4">
                        <div class="meta-wrap">
                            <p class="meta">
                                <span><i class="icon-calendar mr-2"></i>June 28, 2019</span>
                                <span><a href="single.html"><i class="icon-folder-o mr-2"></i>Travel</a></span>
                                <span><i class="icon-comment2 mr-2"></i>5 Comment</span>
                            </p>
                        </div>
                        <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p>
                            <a href="#" class="btn-custom" >Read More <span class="ion-ios-arrow-forward"></span></a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 ftco-animate d-md-flex " style="padding-top: 10px; text-align: center;" >
                 <ul class="pagination">
                     <li class="page-item "><a class="page-link" href="#">1</a></li>
                     <li class="page-item" style="border: none"><a class="page-link" href="#" style="border: none; margin: 0px; padding-left: 0px; padding-right: 3px"> . . . . </a></li>
                     <li class="page-item"><a class="page-link" href="#">3</a></li>
                     <li class="page-item active"><a class="page-link" href="#">4</a></li>
                     <li class="page-item"><a class="page-link" href="#">5</a></li>
                     <li class="page-item" style="border: none"><a class="page-link" href="#" style="border: none; margin: 0px; padding-left: 0px; padding-right: 3px"> . . . . </a></li>
                     <li class="page-item"><a class="page-link" href="#">7</a></li>
                 </ul>
            </div>
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
