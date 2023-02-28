<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        for ($i=1; $i < 30; $i++) { 

            $c = Category::inRandomOrder()->first();
            $title = Str::random(5);

            Post::create([
                'title' => "Post #$i :"." ".Lorem::sentence(2, false),
                'slug' => "post-$i-".$title,
                'content' => Lorem::paragraph(8, false),
                'description' => Lorem::sentence(8),
                'posted' => random_int(0, 1) == 0 ? 'yes':'not',
                'category_id' => $c->id
            ]);
        }
    }
}
