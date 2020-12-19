<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerView()
    {
        return View('users/register');
    }

    public function register(Request $request)
    {
        $file = $request->file('photo');
        $data = $request->all();
        $data['password'] = sha1($data['password']);
        $data['photo'] = $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());
        User::create($data);
        return redirect()->to(route('login-view'));
    }

    public function loginView()
    {
        return View('users/login');
    }

    public function login(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => sha1($request->input('password'))
        ];
        dd(Auth::attempt($data, true));
        if (Auth::attempt($data, true)) {
            return redirect('profile');
        }
        return redirect()->to(route('login'))->withErrors(['error' => 'Wrong email or password']);
    }
}
