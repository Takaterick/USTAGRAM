<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SecureurlController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(User $user){
        //$users = User::all();

        //dd($user->username);
        return view('dashboard', [
            'user'  =>   $user
        ]);
    }
}
