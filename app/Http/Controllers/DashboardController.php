<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    // Add post btn click
    public function postAdd(){
        return view('dashboard/postEdit');
    }
    /*
        Show all blog post into dashboard page
    */
    public function blogPost(){
        // Get current user
        $user = \Auth::user();

        // Get all data for current user
        $allPost = DB::table('post')
        ->where('user_id', $user->id)
        ->get();
        return view('dashboard/blog')->with('all_post',$allPost);
    }

    // Edit blog post
    public function postEdit($postId){
        $post = DB::table('post')
        ->where('id', $postId)
        ->get();
        return view('dashboard/postEdit')->with('post',$post[0]);
    }

}
