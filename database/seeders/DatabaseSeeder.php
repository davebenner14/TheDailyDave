<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
  
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::truncate();
        Category::truncate();
        
        $user = User::factory()->create();

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);
    }
}

Post::create([
    'user_id' => $user->id,
    'category_id' => $family->id,
    'title' => 'My first post',
    'slug' => 'my-first-post',
    'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies tincidunt, nisl nisl aliquam nisl, nec aliquam nisl nisl eu n</p>',
]);

Post::create([
    'user_id' => $user->id,
    'category_id' => $work->id,
    'title' => 'My second post',
    'slug' => 'my-second-post',
    'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed euismod, nisl vel ultricies tincidunt, nisl nisl aliquam nisl, nec aliquam nisl nisl eu n</p>',
]);