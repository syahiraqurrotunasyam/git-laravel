<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class insertBlogPost extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            "title" => "Bunga edelweis",
            "author" => "Alya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis aliquid ut. Excepturi, enim quia."
        ]);

        Post::create([
            "title" => "Bunga melati",
            "author" => "riris",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis aliquid ut. Excepturi, enim quia."
        ]);

        Post::create([
            "title" => "Bunga mawar",
            "author" => "febi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero perferendis aliquid ut. Excepturi, enim quia."
        ]);
    }
}   
