<?php

namespace App\Http\Controllers;

use App\Countries;
use App\Genres;
use App\MovieGenres;
use App\UserInfo;
use Illuminate\Http\Request;
use App\User;
use App\MovieList;
use App\Slug;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\HeadingPermalink\Slug\SlugGeneratorInterface;
use App\Comments;
use Validator;


class MovieController extends Controller
{
    //
    public function postValidator(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name'              => 'required | string ',
            'description'       => ' string ',
            'release'           => 'required',
            'date'              => 'required',
            'rating'           => ' required ',
            'ticket'           => ' required ',
            'price'            => ' required',
            'country'          => ' required ',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 401,
                'error'=>$validator->errors(),
                'data' =>$request], 401);
        }
        else{
            return response()->json(['status' => 200]);
        }

    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
       // return response()->json(['message' => 'your request has been processed', 'data' =>  $request->request]);

        $validation = $this->postValidator($request)->status();

        if($validation == 200){
            $postData = $request->all();

            if($request->file('img')){
                //return 10;
                $attachment = $request->file('img');
                foreach ($attachment as $key=>$single_attachment){
                    $attachment_name = time().$single_attachment->getClientOriginalName();
                    $upload_path = 'images/movies';
                    $success=$single_attachment->move($upload_path,$attachment_name);
                    if($success){
                        $data['photo'] = 'images/movies/'.$attachment_name;
                        break;
                    }
                }

            }

            $user = Auth::user();
            $user_id =   $user['id'];
            $data['user_id'] = $user_id;
            $data['name'] = $postData['name'];
            $data['description'] = $postData['description'];
            $data['release'] = $postData['release'];
            $data['date'] = $postData['date'];
            $data['rating'] = $postData['rating'];
            $data['price'] = $postData['price'];
            $data['country'] = $postData['country'];
            $data['ticket'] = $postData['ticket'];



            $respons = MovieList::create($data);

            foreach ($postData['genre'] as $genre){
                //return $genre;
                $genreData['genre_id']=$genre;
                $genreData['movie_id']=$respons['id'];
                MovieGenres::create($genreData);
            }

            $slug['slug']= $respons['id'].'_'.preg_replace("![^a-z0-9]+!i", "-", $postData['name']);
            $slug['movie_id'] = $respons['id'];
            Slug::create($slug);


            return response()->json(['message' => 'post without image is submitted','data'=>$respons, 'status'=>200]);
        }
        else{
            return $this->postValidator($request);
        }

    }


    public function getAllMovie(){

        $film = MovieList::with('genre')->with('slug')->orderBy('id')->paginate(3);

        return response()->json(['message' => 'your request has been processed', 'data' =>  $film]);
    }

    public function getSingleMovie($slug){
        //return 1;
        $id = Slug::where('slug',$slug)->get('movie_id');
        //return $id;
        $film = MovieList::where('id',$id[0]['movie_id'])->with('genre')->with('slug')->get();
        $comments = Comments::where('movie_id',$id[0]['movie_id'])->with('user')->orderBy('created_at', 'ASC')->get();

        $data['movie'] = $film[0];
        $data['comment'] = $comments;


        return response()->json(['message' => 'your request has been processed', 'data' =>  $data]);

    }
    public function saveComment(Request $request){
        //return 1;
        $user = Auth::user();
        $user_id =   $user['id'];
        //return $request->slug;
        $id = Slug::where('slug',$request->slug)->get('movie_id');
        $movie_id = $id[0]['movie_id'];
        $columValue = [
            'user_id' => $user_id,
            'movie_id' => $movie_id,
            'comment' => $request->comment];
        $return = Comments::create($columValue);

        return  response()->json(['message' => 'your request has been processed', 'data' =>  $return]);
    }

    public function getGenre(){
        $genre = Genres::all();
        return  response()->json(['message' => 'your request has been processed', 'data' =>  $genre]);

    }

    public function getCountry(){
        $genre = Countries::all();
        return  response()->json(['message' => 'your request has been processed', 'data' =>  $genre]);

    }

}
