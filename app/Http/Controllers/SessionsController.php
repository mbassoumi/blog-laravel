<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest',['except' => 'destroy']);
    }

    public function create()
    {

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
}
