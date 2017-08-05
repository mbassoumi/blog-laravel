<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function myPosts()
    {
        // datatable
    }

    public function myComment()
    {
        // datatable
    }

    public function profile()
    {
        $user = auth()->user();
        return view('user.information',compact('user'));
    }
}
