@extends('layouts.publicHeaderLayout')

@section('content')
    <div class="container" style="background-color: #ffffff; margin-top: 70px";>

        <div class="mt-3" >
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="" alt="" class="img-fluid" id="photo">
                    <div class="films_details_jeft mt-3 p-2 mb-2 bg-white text-dark">
                    <span class="">
                        <span class="font-weight-bold">Release: </span> <span id="release"></span>
                    </span>
                        <span class="float-right">
                      <span class="font-weight-bold">Date: </span><span id="date"></span>
                    </span>
                        <br>
                        <span class="">
                      <span class="font-weight-bold">Rating: </span><span id="rating"></span>
                    </span>
                        <span class="float-right">
                      <span class="font-weight-bold" id="ticket"></span>
                    </span>
                    <br>
                    <span class="" id="genre">
                    </span>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="" style="padding-bottom: 5px">
                        <h4 class="film_name" id="title"></h4>

                        <!--<span class="user_name ml-1">Shourov Dutta Akash</span>-->
                        <span class="float-left badge " id="price"></span>
                        <br>
                    </div>
                    <div class="films_details_right mt-3 text-justify">
                        <p id="description">
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" id="user_comment" name="user_comment" placeholder="Comment" rows="3"></textarea>
                        </div>
                        <button class="btn btn-primary" onclick="comment_submit()">Comment</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-5 mb-3">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 " id="comments">
                    <!--<div class="shadow-lg p-3 mb-4 bg-white rounded">
                        <img src="assets/picture/men_01.jpg" alt="" class="img-fluid details_user_photos">
                        <span class="ml-2 comment_user_name">mark zuckerberg</span>
                        <p class="ml-5">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit itaque molestiae possimus, vel id eveniet porro deserunt sapiente delectus minima doloribus reprehenderit officiis incidunt laboriosam, modi aut quia optio explicabo.
                        </p>
                    </div>
                    <div class="shadow-lg p-3 mb-4 bg-white rounded">
                        <img src="assets/picture/men_01.jpg" alt="" class="img-fluid details_user_photos">
                        <span class="ml-2 comment_user_name">mark zuckerberg</span>
                        <p class="ml-5">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit itaque molestiae possimus, vel id eveniet porro deserunt sapiente delectus minima doloribus reprehenderit officiis incidunt laboriosam, modi aut quia optio explicabo.
                        </p>
                    </div>-->
                </div>
            </div>
        </div>


        <input type="hidden" id="slug" value="{{$slug}}">
    </div>


<!-- jQuery first, then Popper.js, then Bootstrap JS-->
<script src="{{ url('/') }}/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.4.5.0.min.js"></script>

<script src="{{ url('/') }}/js/staticText.js"></script>

<script src="{{ url('/') }}/js/common.js"></script>

<script>
    slug = $('#slug').val()

    movieLoad = () =>{

        var url = project_url+"api/v1/movie/"+ slug ;
        var method= 'GET';
        var data = false;
        var request = httpRequest(method, url, data);
        if(request.status!=200){
            window.location.replace(project_url);
        }
        //alert(request.status)
        //console.log(request.response)

        respons  = JSON.parse(request.response);

        console.log(respons)
        genre = ' <span class="font-weight-bold">Genre: </span>\n'
        $.each(respons['data']['movie']['genre'], function (key, value) {
            genre += '<span class="badge badge-secondary bg-primary">'+value['name']+'</span>';
        } )
        $('#description').html(respons['data']['movie']['description'])
        $('#price').html('Price: '+respons['data']['movie']['price'])
        $('#title').html(respons['data']['movie']['name'])
        $('#photo').attr("src",project_url+respons['data']['movie']['photo'])
        $('#ticket').html('Ticket: '+respons['data']['movie']['ticket'])
        $('#release').html(respons['data']['movie']['release']=1?'Yes':'No')
        $('#rating').html(respons['data']['movie']['rating']+'/5')
        $('#date').html(respons['data']['movie']['date'])
        $('#genre').html(genre)

        comments = '';

        $.each(respons['data']['comment'], function (key, comment) {
            comments+='<div class="shadow-lg p-3 mb-4 bg-white rounded">\n' +
                '                <h5>'+comment['user']['name']+'</h5>\n' +
                '                <p class="ml-5">'+comment['comment']+'</p>\n' +
                '            </div>'
        })
        $('#comments').html(comments)



    }
    movieLoad()

    comment_submit= ()=> {
        event.preventDefault()
        var data = JSON.stringify({
            'comment' :$("#user_comment").val(),
            'slug': slug,
        });
        var url = project_url+"api/v1/movie/comment";
        var method= 'POST';
        var data = data;
        var request = httpRequest(method, url, data);
        //alert(request.status)
        if(request.status!=200){
            alert('Please Login first and submit your comment')
            $('#login').modal();
            //comment_submit()
        }
        else {
            $("#user_comment").val('')
            movieLoad()
        }


    }


    </script>

@endsection
