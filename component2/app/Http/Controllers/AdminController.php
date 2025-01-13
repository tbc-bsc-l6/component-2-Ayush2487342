<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use alert;

class AdminController extends Controller
{
    //
    public function user()
    {
        $data=user::all();
        return view("admin.user",compact("data"));
    }
    public function product():
}
