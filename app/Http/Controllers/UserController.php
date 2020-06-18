<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class UserController extends Controller
{
    //
    public function user()
    {
        //return 1;
        //$id = $request->id;
        $user = Auth::user();
        //return 0;
        $user['photo'] = 'avatar.png';

        return response()->json(['message' => 'your request has been processed', 'data' =>  $user]);

    }

}
