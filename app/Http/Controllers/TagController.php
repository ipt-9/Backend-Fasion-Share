<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Name' => 'required|string',
        ]);

        // Create a new user instance
        $post = new Tag();
        $post->Name = $request->input('Name');
        $post->updated_at = now();
        $post->created_at = now();
        $post->save();

        return response()->json(['message' => 'tag created successfully'],201);
    }

    public function showPostsWithTag(){

            }
}
