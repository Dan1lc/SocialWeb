<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function start()
    {
        return view('start');
    }
    public function users()
    {
        $users=DB::table('users')->get();
        return view('users',compact('users'));
    }
}
