<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Category $category)
    {
        $category->delete();

//        return view('admin.categories.show',['category'=>$category]);уместнее сдлеаь редирект, чтобы не подгружать из базхы категории
        return redirect()->route('admin.categories.index');
    }
}
