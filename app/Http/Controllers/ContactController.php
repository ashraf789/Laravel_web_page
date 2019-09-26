<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactView()
    {
        return view('contact');
    }

    // return Post::create([
    //     'title' => $data['title'],
    //     'article' => $data['article'],
    //     'user_id' => $data['user_id'],
    // ]);

    public function createMessage(array $data)
    {
        return Contact::create(
            [
                'name'   => $data['name'],
                'email'  => $data['email'],
                'message'=> $data['message'],
            ]
        );

        // print_r($data);
    }

    public function saveUserRequest(Request $request)
    {
        try {
            $result = $this::createMessage($request->input());
            if ($result) {
                $result = 'Thank you for your message!';
            } else {
                $result = 'Failed to send your message, please try again!';
            }
        } catch (Exception $e) {
            $result = $e;
        }

        return redirect()->back()->with('message', $result);
    }
}
