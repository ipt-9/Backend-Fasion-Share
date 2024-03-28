<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function show(int $id){
        $post = Post::find($id);
        return ['data' => $post];
    }
    public function showAll(){
        $posts = Post::all();
        return ['data' => $posts];
    }

    public function showUserPosts(int $id){
        $posts = Post::where('user_id', '=', $id)->get();
        return ['data' => $posts];
    }

    public function showLikedPosts(int $id){
        $user = User::find($id);


        $posts = User::find($id)->posts()->get();
        return ['data' => $posts];
    }


    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'user_id' => 'required|int',
            'description' => 'required|string|max:300',
            'image' => 'required|string',
        ]);

        // Create a new user instance
        $post = new Post();
        $post->user_id = $request->input('user_id');
        $post->description = $request->input('description');
        $post->image = $request->input('image');
        $post->updated_at = now();
        $post->created_at = now();
        $post->save();

        return response()->json(['message' => 'Post created successfully'],201);
    }
}
