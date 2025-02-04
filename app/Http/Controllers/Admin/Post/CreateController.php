<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.posts.create',[
            'categories'=>$categories,
            'tags'=>$tags
            ]);
    }
}
