<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;

use App\Models\User;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class UserController extends Controller
{
    public function show(int $id){
        $user = User::find($id);
        return ['data' => $user];
    }
    public function showAll(){
        $user = User::all();
        return ['data' => $user];
    }

    public function searchUser(Request $request)
    {
        $searchTerm = $request->input('search');

        $users = User::where('name', 'LIKE', "%$searchTerm%")->get();

        return $users;
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
        ]);




        // Create a new user instance
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->updated_at = now();
        $user->created_at = now();
        $user->save();

        return response()->json(['message' => 'User created successfully'],201);
        }



    // public function tweets(int $id)
    //{
      //  return ['data' => Tweet::where('user_id', '=', $id)->with('user')->latest()->take(10)->get()];
        //$user = \App\Models\User::find($id);
        // return $user->tweets();
        //return ['data' => User::find($id)->tweets()->latest()->take(10)->get()];
   // }
}
