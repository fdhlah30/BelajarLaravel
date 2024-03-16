<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\View\View;
class UserController extends Controller
{
    public function show(string $id): View
    {
        // $user=
        // dd($user);
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
