<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\User;
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
        $users = User::all();
        return view("posts.create" , ['users' => $users]);
    }



    public function show($postId){
        $users = User::all();
        $single_post = Post::findOrFail($postId);
        //return "Show Page";
        //dd($single_post);
        return view("posts.show",['post' => $single_post,'users' => $users]);
    }



    public function store(Request $request){

        $data = request()->all();
        // $title = $data['title'];
        // $description = $data['description'];
        // $post_creator = $data['post_creator'];

        //dd($title,$description,$post_creator);
        $title = $request->title;
        $description = $request->description;
        $userId = $request->user_id;
        //dd($userId);
        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userId
        ]);

        return redirect()->route('posts.index');
    }



    public function edit($post){
        $users = User::all();
        $single_post = Post::findOrFail($post);
        return view('posts.edit',['post' => $single_post,'users' => $users]);
    }



    public function update($post,Request $request){

        $single_post = Post::findOrFail($post);

        $single_post -> update([
            'title' => $request->title,
            'description' => $request->description,
            'user_id' => $request->user_id
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
