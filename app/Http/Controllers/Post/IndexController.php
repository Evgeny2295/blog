<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $posts = Post::paginate(5);
        $randomPosts = Post::get()->random(4);
        $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users_count','DESC')->get()->take(4);
        return view('post.index',[
            'posts'=>$posts,
            'randomPosts'=>$randomPosts,
            'likedPosts'=>$likedPosts
        ]);
    }
}
