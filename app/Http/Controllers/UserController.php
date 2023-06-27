<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // $user = User::find(1);
        // dd($user);
        return view('admin.users.index-user');
    }

    // public function show(User $user)
    // {
    //     $user = User::find($user->id);
    //     dd($user);
    //     return view('admin.users.index-user', compact('user'));
    // }
}
