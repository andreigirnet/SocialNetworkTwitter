<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function store(User $user){
        //follow the give user or authenticate user follow the given user
        //dd(auth()->user()->following($user));

        auth()->user()->toggleFollow($user);

        return back();
    }
}
