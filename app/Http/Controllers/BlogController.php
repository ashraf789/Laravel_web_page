<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogPost(){
        $post = DB::table('post')->get();
        return view('blog')->with('all_post',$post);
    }

    public function edit(){

    }
}
