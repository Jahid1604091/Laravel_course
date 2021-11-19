<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
 
    public function index()
    {
        // return Post::all()->where('status',1);
        return Post::find(1);
    }


    public function create()
    {
        $data = [
            'user_id'=>1,
            'title'=>'Post title 1',
            'description'=>'Post description 1',
            'status'=>0
        ];

        //-- w/o EORM
        // DB::table('posts')->insert($data);

        //---with EORM
        Post::create($data);
    }

    //insert in OO style
    public function create2()
    {
        $post = new Post();
        $post->title = 'OO title';
        $post->user_id = 3;
        $post->status = 1;
        $post->description = 'OO description';

        $post->save();

    }

    public function updatePost($id)
    {
        $post = Post::find($id);
        $post->title = 'Update OO title';
        $post->save();
    }

    public function delete($id){
        //--process 1
        // $post = Post::findOrFail($id);
        // $post->delete();

        //--process 2
        // Post::destroy($id);
        // Post::destroy([4,5]);

        // Post::where('status',1)->delete();

    }
}
