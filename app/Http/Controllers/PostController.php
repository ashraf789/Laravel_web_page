<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Post
     */
    protected function createPost(array $data)
    {
        return Post::create([
            'title'   => $data['title'],
            'article' => $data['article'],
            'user_id' => $data['user_id'],
        ]);
    }

    // Insert new blog post
    public function submitPost(Request $request)
    {
        // print_r($request->input());
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get current user
            $user = \Auth::user();

            $data = [
                'title'   => $request->input('title'),
                'article' => $request->input('article'),
                'user_id' => $user->id,
            ];

            // if post is not valid then this validation function will return an response
            $this->validate($request, [
                'title'   => 'required',
                'article' => 'required',
            ]);

            try {
                $result = $this::createPost($data);

                return redirect()->route('dashboard');
            } catch (Exception $e) {
                echo $e;

                return redirect()->back()->withErrors('message', $e);
            }
        }
    }

    /*
    Return post details view
    */
    public function postDetails($request)
    {
        $post = DB::table('post')
        ->select('title', 'article', 'create_at')
        ->where('id', '=', $request)
        ->get();

        return view('postDetails')->with('post', $post[0]);
    }

    // Update blog post
    public function updatePost(Request $request, $postId)
    {
        $update = DB::update('update post set title = :title, article = :article where id = :id',
        [
            'title'  => $request->title,
            'article'=> $request->article,
            'id'     => $request->id,
        ]);

        return redirect()->route('dashboard')->with('status', $update);
    }

    // Delete blog post
    public function postDelete($postId)
    {
        $deleted = DB::delete('delete from post where id = :postId', ['postId'=>$postId]);

        return redirect()->route('dashboard')->with('deleteStatus', $deleted);
    }
}
