<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Post $posts, Tag $tags)
    {
        $posts->all();
        $tags->all();

        foreach ($posts->all() as $post){
            $post->tags()->attach($tags->all()->random());
        }
    }
}
