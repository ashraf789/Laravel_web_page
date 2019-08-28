<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;


// use App\Post;

/**
 *
 */


     // public function getAuthority()
     {
         // return DB::select(DB::raw('SELECT * FROM `authority` ORDER BY authority_id DESC'));
     }

class Home extends BaseController
{

	public function index(){
		// return DB::select(DB::raw('SELECT * FROM `authority` ORDER BY authority_id DESC'));

		$post = DB::table('post')->get();
		// $post = DB::select(DB::row('SELECT * FROM `post` '));
		return view('index')->with('all_post',$post);

	}
}
?>
