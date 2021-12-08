<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //Create Akun Admin
        User::create([
            'name' => 'Prisma Putra',
            'username' => 'prisma',
            'email' => 'prismaputra91@gmail.com',
            'password' => bcrypt('matius777'),
            'email_verified_at' => now(),
            'is_admin' => 1
        ]);
        
        User::factory(3)->create();

        // // User::create([
        // //     'name' => 'Akido Seiryuu',
        // //     'email' => 'raikanizero1@gmail.com',
        // //     'password' => bcrypt('Kusukakusuka')
        // // ]);


        //Seeder for Category
        Category::create([
            'name' => 'Horror',
            'slug' => 'horror'
        ]);

        Category::create([
            'name' => 'Funny',
            'slug' => 'funny'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Slice of Life',
            'slug' => 'slice-of-life'
        ]);

        Category::create([
            'name' => 'Adventure',
            'slug' => 'adventure'
        ]);

        Category::create([
            'name' => 'Angst',
            'slug' => 'angst'
        ]);

        // Seeder for Post
        Post::factory(20)->create();
    }
}
