<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        factory(Post::class,20)->make()->each(function ($post) use($users) {
            $post->user()->associate($users->random())->save();
        });
    }
}
