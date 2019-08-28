<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LogoutController extends Controller
{
    //Log out function
    public function logout(request $request){
        $request->session()->flush();
        return redirect()->route('home');
    }
}
