<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class DashboardController extends Controller
{
    /*
        Show all blog post into dashboard page
    */
    public function blogPost(){
        // Get current user
        $user = \Auth::user();

        // Get all data for current user
        $post = DB::table('post')
        ->where('id', $user->id)
        ->get();
        return view('blog')->with('all_post',$post);
    }

    // Edit blog post
    public function postEdit($postId){
        echo $postId;
    }

    // Delete blog post
    public function postDelete($postId){
        echo $postId;
    }


}
