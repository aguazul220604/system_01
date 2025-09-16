<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class GetUsersController extends Controller
{
    public function GetUsers()
    {
        $users = User::all();
        return view('dashboard', compact('users'));
    }
}
