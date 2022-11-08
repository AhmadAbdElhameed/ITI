<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = new \App\Models\Post([
            'title' => 'Post #1',
            'description' => 'Post #1 description',
            'user_id' => 1
        ]);
        $posts->save();


        $posts = new \App\Models\Post([
            'title' => 'Post #2',
            'description' => 'Post #2 description',
            'user_id' => 2
        ]);
        $posts->save();


        // $posts = new \App\Models\Post([
        //     'title' => 'Post #3',
        //     'description' => 'Post #3 description',
        //     'user_id' => 3
        // ]);
        // $posts->save();
        // $posts = new \App\Models\Post([
        //     'title' => 'Post #4',
        //     'description' => 'Post #4 description',
        //     'user_id' => 4
        // ]);
        // $posts->save();
        // $posts = new \App\Models\Post([
        //     'title' => 'Post #5',
        //     'description' => 'Post #5 description',
        //     'user_id' => 5
        // ]);
        // $posts->save();
        // $posts = new \App\Models\Post([
        //     'title' => 'Post #6',
        //     'description' => 'Post #6 description',
        //     'user_id' => 6
        // ]);
        // $posts->save();
        // $posts = new \App\Models\Post([
        //     'title' => 'Post #7',
        //     'description' => 'Post #7 description',
        //     'user_id' => 7
        // ]);
        // $posts->save();
    }
}
