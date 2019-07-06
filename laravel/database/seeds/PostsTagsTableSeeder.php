<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;
use Faker\Generator as Faker;

class PostsTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Post $posts, Tag $tags, Faker $faker)
    {
        $t = $tags->all();

        $posts->all()->map(function ($post) use($faker,$t){
            for($i=0; $i < $faker->numberBetween(1,$t->count()); $i++)
            try{
                $post->tags()->attach($t->random());
            }catch(\Illuminate\Database\QueryException $exception){
                echo "error insert";
            }
        });
    }
}
