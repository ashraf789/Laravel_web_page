<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;

class PostUpdateController extends Controller
{
    /*
        Update post
    */
    public function updatePost(Request $request, $postId){

        $update = DB::update('update post set title = :title, article = :article where id = :id',
        [
            'title'=>$request->title,
            'article'=>$request->article,
            'id'=>$request->id
        ]);
        return redirect()->route('dashboard')->with('status',$update);
    }

}
