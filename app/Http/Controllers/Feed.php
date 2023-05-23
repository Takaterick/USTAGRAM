<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class Feed extends Controller
{
    public function index(User $user){

        $posts = Post::where('user_id', $user->id)->paginate(6);

        return view('dashboard', [  
            'user'  =>   $user,
            'posts' => $posts
        ]);
    }
}
