<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Support\Facades\Hash;

class GetUsersController extends Controller
{
    public function GetUsers()
    {
        $users = User::all();

        return response()
            ->view('dashboard', compact('users'))
            ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

    public function registro()
    {
        return response()
            ->view('registro')
            ->header('Cache-Control', 'no-cache, no-store, max-age=0, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', 'Fri, 01 Jan 1990 00:00:00 GMT');
    }

    public function registro_store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|confirmed|min:6',
            'domicilio' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'edad' => 'required|integer|min:1',
            'estatus' => 'required|in:0,1',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->domicilio = $request->domicilio;
        $user->telefono = $request->telefono;
        $user->edad = $request->edad;
        $user->estatus = $request->estatus;

        $user->save();

        return redirect()->route('dashboard')->with('message', 'ok');
    }
}
