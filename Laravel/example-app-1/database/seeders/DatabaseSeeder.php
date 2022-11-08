<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\Post::factory(10)->create();




        \App\Models\User::factory()->create([
            'name' => 'ahmad',
            'email' => 'ahmad@example.com',
            'password' => '12345678'
        ]);

        \App\Models\User::factory()->create([
            'name' => 'mohamed',
            'email' => 'mohamed@example.com',
            'password' => '12345678'
        ]);

        $this -> call(PostSeeder::class);
    }
}
