<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        // Listing::factory(6)->create();
        
        $user= User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com',
        ]);
        Listing::factory(6)->create([
            'user_id'=>$user->id 
        ]);

        // Listing::create(
        //     [
        //         'title' => 'first title',
        //         'tags' => 'fist tag',
        //         'company' => 'WWS',
        //         'location' => 'sector v',
        //         'email' => 'wws@gmail.com',
        //         'website' => 'wws.com',
        //         'description' => 'lorem ipsum'
        //     ]
        // );
    }
}
