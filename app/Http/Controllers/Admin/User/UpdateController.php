<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request,User $user)
    {
        $data = $request->validated();

        $user->update($data);

        return view('admin.users.show',['user'=>$user]);
    }
}
