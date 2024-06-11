<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;

use App\Models\Tag;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        $tag->delete();

//        return view('admin.categories.show',['category'=>$category]);уместнее сдлеаь редирект, чтобы не подгружать из базхы категории
        return redirect()->route('admin.tags.index');
    }
}
