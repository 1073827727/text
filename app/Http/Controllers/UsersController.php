<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function create(){
        //登录页面
        return view('users.create');
    }

    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }











}
