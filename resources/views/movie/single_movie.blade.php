@extends('layouts.publicHeaderLayout')

@section('content')
<div class="container mt-3" style=" margin-top: 80px">
    <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <img src="{{ url('/') }}/images/movies/3_Idiots.png" alt="" class="img-fluid">
            <div class="films_details_jeft mt-3 p-2 mb-2 bg-white text-dark">
            <span class="">
              <span class="font-weight-bold">Release: </span> No
            </span>
                <span class="float-right">
              <span class="font-weight-bold">Date: </span> February 17, 2020
            </span>
                <br>
                <span class="">
              <span class="font-weight-bold">Rating: </span> 6.9 / 10
            </span>
                <span class="float-right">
              <span class="font-weight-bold">Ticket: </span>
              this is ticket
            </span>
                <br>
                <span class="">
              <span class="font-weight-bold">Genre: </span>
              <span class="badge badge-secondary">Akash</span>
              <span class="badge badge-secondary">Dutta</span>
              <span class="badge badge-secondary">Kajol</span>
              <span class="badge badge-secondary">Chaki</span>
            </span>
            </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
            <h4 class="film_name">This is a Films Title</h4>
            <div class="">
                <img src="assets/picture/men_01.jpg" alt="" class="img-fluid details_user_photos">
                <span class="user_name ml-1">Shourov Dutta Akash</span>
                <span class="float-right badge user_country">Price: $ 10</span>
            </div>
            <div class="films_details_right mt-3 text-justify">
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut iusto temporibus quia quidem ipsa. Itaque autem necessitatibus dolorem saepe, quo repudiandae, accusamus alias explicabo nisi numquam aliquam quos rem voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, eius. Temporibus iusto quidem facere, doloremque repudiandae ut, non voluptatem similique expedita saepe perferendis animi provident ipsa recusandae voluptas impedit architecto!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut iusto temporibus quia quidem ipsa. Itaque autem necessitatibus dolorem saepe, quo repudiandae, accusamus alias explicabo nisi numquam aliquam quos rem voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, eius. Temporibus iusto quidem facere, doloremque repudiandae ut, non voluptatem similique expedita saepe perferendis animi provident ipsa recusandae voluptas impedit architecto!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ut iusto temporibus quia quidem ipsa. Itaque autem necessitatibus dolorem saepe, quo repudiandae, accusamus alias explicabo nisi numquam aliquam quos rem voluptatibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, eius. Temporibus iusto quidem facere, doloremque repudiandae ut, non voluptatem similique expedita saepe perferendis animi provident ipsa recusandae voluptas impedit architecto!
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <form>
                <div class="p-2 mb-2 text-dark">
                    <img src="assets/picture/men_01.jpg" alt="" class="img-fluid details_user_photos">
                    <span class="ml-2 comment_user_name"> Shourov Dutta</span>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="user_comment" placeholder="Comment" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Comment</button>
            </form>
        </div>
    </div>
</div>

<div class="container mt-5 mb-3">
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="shadow-lg p-3 mb-4 bg-white rounded">
                <img src="assets/picture/men_01.jpg" alt="" class="img-fluid details_user_photos">
                <span class="ml-2 comment_user_name">mark zuckerberg</span>
                <p class="ml-5">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Impedit itaque molestiae possimus, vel id eveniet porro deserunt sapiente delectus minima doloribus reprehenderit officiis incidunt laboriosam, modi aut quia optio explicabo.
                </p>
            </div>
        </div>
    </div>
</div>



@endsection


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ url('/') }}/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ url('/') }}/assets/js/bootstrap.4.5.0.min.js"></script>

