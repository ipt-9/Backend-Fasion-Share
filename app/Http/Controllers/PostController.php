<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
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

        return response()->json(['message' => 'User created successfully'],201);
    }
}
