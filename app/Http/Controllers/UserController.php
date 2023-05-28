<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index($id) {

        $user = User::find($id);
        return $user->name;
    }

    public function store() {
        User::create([
            'name' => 'Mustafa',
            'email' => 'mustafa@gmail.com',
            'password' => Hash::make('1234')
        ]);

        return response("OK");
    }
}
