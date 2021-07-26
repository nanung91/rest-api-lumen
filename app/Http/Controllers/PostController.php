<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function Posts(){
        $posts=Post::with('postedBy:id,name,email')->get();
        return response()->json($posts, 200,);

    }
    public function Create(Request $data){
        $create=Post::create([
            'user_id'=>'1',
            'post' =>$data['post'],
            'status'=>$data['status']
        ]);
        return response()->json('succesfully posted!', 200);
    }
}
