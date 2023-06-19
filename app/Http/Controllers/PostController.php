<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function getAllPosts(Request $request)
    {
        $query = $request->query('search'); 
    
        $posts = $query ? Post::where('title', 'like', '%' . $query . '%')->get() : Post::all();
    
        return response()->json($posts);
    }
    
    public function createPost(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->save();

        return response()->json(['message' => 'Post created successfully'], 201);
    }

    public function getPost($id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        return response()->json($post);
    }
}
