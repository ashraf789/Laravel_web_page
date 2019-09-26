<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Home extends BaseController
{
    public function index()
    {
        // return DB::select(DB::raw('SELECT * FROM `authority` ORDER BY authority_id DESC'));

        $post = DB::table('post')
        ->orderBy('id', 'desc')
        ->get();
        // $post = DB::select(DB::row('SELECT * FROM `post` '));
        return view('index')->with('all_post', $post);
    }
}
