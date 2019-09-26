<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //Log out function
    public function logout(request $request)
    {
        $request->session()->flush();

        return redirect()->route('home');
    }
}
