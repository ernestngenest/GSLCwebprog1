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
    //ini untuk nge deploy yang ada di factory
    {

        \App\Models\User::factory(10)->create();

        \App\Models\Listing::factory(10)->create();

        // \App\Models\Listing::factory()->create([
        //     'title' => 'Junior Developer',
        //     'tags' => 'laravel, php, javascript',
        //     'company' => 'Wonka Industries',
        //     'location' => 'Boston, MA',
        //     'email' => 'email4@email.com',
        //     'website' => 'https://www.wonka.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

        // \App\Models\Listing::factory()->create([
        //     'title' => 'Backend Developer',
        //     'tags' => 'laravel, php, api',
        //     'company' => 'Skynet Systems',
        //     'location' => 'Newark, NJ',
        //     'email' => 'email4@email.com',
        //     'website' => 'https://www.skynet.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita, eveniet aliquid, quam illum quaerat consequatur! Expedita ab consectetur tenetur delensiti?'
        // ]);

    }
}
