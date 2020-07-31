<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
        // $user = new User();
        // $user->name = "mauricio";
        // $user->email = "mauricio@mauricio.com";
        // $user->password = Hash::make('123');
        // $user->save();
        //    echo "<h1> Minha lista </h1>";
        $user = User::where('id', 1)->first();

        return view('listUser', compact('user'));
    }
}
