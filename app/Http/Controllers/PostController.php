<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /*
        Return post details view
    */
    public function postDetails($request){

        $post = DB::table('post')
                            ->select('title','article','create_at')
                            ->where('id','=',$request)
                            ->get();

        return view('postDetails')->with('post',$post[0]);
    }
}
?>
