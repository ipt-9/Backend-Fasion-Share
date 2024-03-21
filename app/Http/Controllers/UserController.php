<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(int $id){
        $user = User::find($id);
        return ['data' => $user];
    }

   // public function tweets(int $id)
    //{
      //  return ['data' => Tweet::where('user_id', '=', $id)->with('user')->latest()->take(10)->get()];
        //$user = \App\Models\User::find($id);
        // return $user->tweets();
        //return ['data' => User::find($id)->tweets()->latest()->take(10)->get()];
   // }
}
