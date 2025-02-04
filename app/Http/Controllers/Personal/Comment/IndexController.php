<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */

    public function __invoke()
    {

        $comments = auth()->user()->comments;
        return view('personal.comment.index',[
            'comments'=>$comments
        ]);
    }
}
