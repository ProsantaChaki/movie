<?php

namespace App\Http\Controllers;

use App\UserInfo;
use Illuminate\Http\Request;
use App\User;
use App\MovieList;
use App\Slug;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\HeadingPermalink\Slug\SlugGeneratorInterface;
use App\Comments;

class MovieController extends Controller
{
    //


    public function getAllMovie(){

        $film = MovieList::with('genre')->with('slug')->orderBy('id')->paginate(1);

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

}
