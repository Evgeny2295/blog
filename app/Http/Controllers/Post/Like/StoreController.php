<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\StoreRequest;
use App\Models\Comment;
use App\Models\Post;

class StoreController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke(Post $post)
    {
        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->route('post.show',$post->id);
    }
}
