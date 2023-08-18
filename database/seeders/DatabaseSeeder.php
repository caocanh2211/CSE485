<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
          $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('channels')->insert([
                'ChannelName' => $faker->word,
                'Description' => $faker->sentence,
                'SubscribersCount' => $faker->numberBetween(100, 10000),
                'URL' => $faker->url,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}