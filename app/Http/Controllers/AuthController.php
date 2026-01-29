<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->with('error', 'Incorrect email or password');
        }
        Session::put('user', $user);

        return redirect('/dashboard');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/login');
    }
}
