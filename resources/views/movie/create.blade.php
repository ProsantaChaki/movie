@extends('layouts.publicHeaderLayout')

@section('content')
    <div class="container" style="background-color: #ffffff; margin-top: 70px";>
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header"><h2>Insert a Movie </h2></div>
                    <hr/>
                    <div class="card-body">

                        <form id="post_create" name="post_create"  enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row text-center">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Image</label>


                                <div class="col-md-7">
                                    <div class="col-md-4">
                                        <input type="file" name="img[]" class="file" id="Photo" accept="image/*">
                                    </div>
                                    <div class="col-md-8">
                                        <img src="assets/picture/80x80.png" id="preview" class="img-fluid upload_films_picture float-right" style="height: 100px">

                                    </div>

                                </div>


                            </div>

                            <div class="form-group row">
                                <label for="title" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-7">
                                    <input id="name" name="name" type="text" class="form-control"  placeholder="The Name of The Movie" required autocomplete="name" autofocus>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                                <div class="col-md-7">
                                    <textarea rows="14" id="description" name="description" type="text" class="form-control "  required placeholder="Describe within 200 words"></textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="mobile" class="col-md-4 col-form-label text-md-right">Release</label>

                                <div class="col-md-7">
                                    <select id="release" name="release" class="chosen md-3 form-control" placeholder="ype of Post" required>
                                        <option value="0" selected>No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="area" class="col-md-4 col-form-label text-md-right">Date</label>

                                <div class="col-md-7">
                                    <input type="date" class="form-control create_new_films_input_form" id="date" name="date" placeholder="Enter A Films Date">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="address" class="col-md-4 col-form-label text-md-right" >Rating</label>

                                <div class="col-md-7">
                                    <input id="rating" name="rating" type="number" class="form-control "  required placeholder="Enter Rating Out of 5" required min="1" max="5">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category" class="col-md-4 col-form-label text-md-right">Ticket</label>

                                <div class="col-md-7">
                                    <select id="ticket" name="ticket" class="chosen md-3 form-control" placeholder="ype of Post" required>
                                        <option value="Available" selected>Available</option>
                                        <option value="Not Available">Not Available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="quality" class="col-md-4 col-form-label text-md-right" >Price</label>

                                <div class="col-md-7">
                                    <input id="price" name="price" type="number" class="form-control "  required placeholder="Enter Price for a Ticket" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="post_type" class="col-md-4 col-form-label text-md-right">Country</label>

                                <div class="col-md-7">
                                    <input list="data" id="country" name="country" class="chosen md-3 form-control" placeholder="Select Country"  >
                                    <datalist id="data">
                                        <!--option value=" Dhaka">
                                        <option value="Firefox">
                                        <option value="Chrome">
                                        <option value="Opera"-->
                                    </datalist>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="financial_value" class="col-md-4 col-form-label text-md-right">Genre</label>

                                <div class="col-md-7" id="genre">
                                    <!--<div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="Yes" name="genre" value="option1">
                                        <label class="form-check-label" for="Yes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="No" value="option2">
                                        <label class="form-check-label" for="No">No</label>
                                    </div>-->
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-7 offset-md-4">
                                    <button type="button" class="btn btn-primary" onclick="saveMovie()" >
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS-->
    <script src="{{ url('/') }}/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{ url('/') }}/assets/js/bootstrap.4.5.0.min.js"></script>

    <!-- Bootstrap Datepicker JS -->
    <script src="{{ url('/') }}/assets/js/bootstrap-datepicker.min.js"></script>
    <script src="{{ url('/') }}/assets/js/script.js"></script>

    <script src="{{ url('/') }}/js/staticText.js"></script>

    <script src="{{ url('/') }}/js/common.js"></script>

    <script>
        loadGenre = ()=>{
            var url = project_url+"api/v1/genre";
            var method= 'GET';
            var data = false;
            var request = httpRequest(method, url, data);
            respons  = JSON.parse(request.response);
            html = '';
            $.each(respons['data'],function (key, genre) {
                html+='<div class="form-check form-check-inline">\n' +
                    '       <input class="form-check-input" type="checkbox" name="genre[]" value="'+genre["id"]+'">\n' +
                    '       <label class="form-check-label" for="Yes">'+genre["name"]+'</label>\n' +
                    '  </div>'
            })
            //console.log(html)

            $('#genre').html(html)

            //console.log(respons)
        }

        loadGenre()

        loadCountry = ()=>{
            var url = project_url+"api/v1/country";
            var method= 'GET';
            var data = false;
            var request = httpRequest(method, url, data);
            respons  = JSON.parse(request.response);
            html = '';
            $.each(respons['data'],function (key, country) {
                html+='<option value="'+country['name']+'">'
            })

            $('#data').html(html)
        }
        loadCountry()

        saveMovie =()=>{
            event.preventDefault()
            data =new FormData($('#post_create')[0]);

            var url = project_url+"api/v1/movie/create";
            var method= 'POST';
            var data = data;
            var request = fileUpload(method, url, data);
            respons  = JSON.parse(request.response);
        }


    </script>

@endsection
