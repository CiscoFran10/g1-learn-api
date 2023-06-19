<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;

class CommentController extends Controller
{

    public function getComment(Post $post, $id)
    {
        $comment = $post->comments()->find($id);
    
        if (!$comment) {
            return response()->json(['message' => 'Comment not found'], 404);
        }
    
        return response()->json($comment);
    }
    

    public function getAllComments(Post $post)
    {
        $comments = $post->comments()->with('replies')->get();
    
        return response()->json($comments);
    }
    

    public function addComment(Request $request, $id)
    {
        $comment = new Comment();
        $comment->content = $request->input('content');
        $comment->post_id = $id;
        $comment->save();

        return response()->json(['message' => 'Comment added successfully'], 201);
    }

    public function addReply(Post $post,Request $request, $id)
    {
        $comment = $post->comments()->find($id);

        if (!$comment) {
            return response()->json(['message' => 'comment not found'], 404);
        }

        $reply = new Reply();
        $reply->content = $request->input('content');
        $reply->comment_id = $comment->post_id = $id;
        $reply->save();

        return response()->json(['message' => 'Reply added successfully'], 201);
    }

    
}
