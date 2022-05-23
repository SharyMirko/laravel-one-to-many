<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Category;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) {
            $user = DB::table('users')->inRandomOrder()->first()->id;
            $title = $faker->words(rand(2, 10), true);
            Post::create([
                'user_id'       => $user,
                'category_id'   => DB::table('categories')->inRandomOrder()->first()->id,
                'title'         => $title,
                'thumb'         => 'https://picsum.photos/200',
                'content'       => $faker->text(rand(200, 1000)),
                'slug'          => Post::generateSlug($title)
            ]);
        }
    }
}
