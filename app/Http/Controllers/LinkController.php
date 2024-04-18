<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'Name' => 'required|string',
            'link' => 'required|string',
        ]);

        // Create a new user instance
        $post = new Link();
        $post->Name = $request->input('Name');
        $post->Link = $request->input('Link');
        $post->updated_at = now();
        $post->created_at = now();
        $post->save();

        return response()->json(['message' => 'link created successfully'],201);
    }
}
