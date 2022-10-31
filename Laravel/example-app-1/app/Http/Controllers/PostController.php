<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    public function index(){

        // $allposts = [
        //     ["ID"=> 1 ,"Title" => "first" ,"Posted By" => "Ahmad" , "Created At" => "2020"],
        //     ["ID"=> 2 ,"Title" => "second" ,"Posted By" => "Mahmoud" , "Created At" => "2022"]
        // ];

        $postsFromDB = Post::paginate(5);
        // dd($postsFromDB);

        return view("posts.index",['posts' => $postsFromDB]);
    }

    public function create(){

        return view("posts.create");

    }
    public function show($postId){

        $single_post = Post::findOrFail($postId);
        //return "Show Page";
        //dd($single_post);
        return view("posts.show",['post' => $single_post]);
    }
    public function store(Request $request){

        $data = request()->all();
        $title = $data['title'];
        $description = $data['description'];
        $post_creator = $data['post_creator'];

        //dd($title,$description,$post_creator);
        $title = $request->title;
        $description = $request->description;
        $post_creator = $request->post_creator;

        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'post_creator' => $post_creator
        ]);

        return redirect()->route('posts.index');
    }

    public function edit($post){
        $single_post = Post::findOrFail($post);
        return view('posts.edit',['post' => $single_post]);
    }
    public function update($post,Request $request){
        $single_post = Post::findOrFail($post);

        $single_post -> update([
            'title' => $request->title,
            'description' => $request->description,
            'post_creator' => $request->post_creator
        ]);

        //dd($single_post);
        return redirect()->route('posts.index');
    }
    public function destroy($post){
        $single_post = Post::findOrFail($post);
        $single_post -> delete();
        return redirect()->route('posts.index');
    }


}
