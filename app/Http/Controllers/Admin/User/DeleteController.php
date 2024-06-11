<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;

class DeleteController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user)
    {
        $user->delete();

//        return view('admin.categories.show',['category'=>$category]);уместнее сдлеаь редирект, чтобы не подгружать из базхы категории
        return redirect()->route('admin.users.index');
    }
}
