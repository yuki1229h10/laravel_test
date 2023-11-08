<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view('user.dashboard', ['users' => $users]);
    }
}
