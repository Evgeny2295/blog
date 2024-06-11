<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class DeleteController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Post $post)
    {
        $post->delete();

//        return view('admin.categories.show',['category'=>$category]);уместнее сдлеаь редирект, чтобы не подгружать из базхы категории
        return redirect()->route('admin.posts.index');
    }
}
