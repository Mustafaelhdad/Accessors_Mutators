<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index($id) {

        $user = User::find(1);
        return $user->name;
    }
}
