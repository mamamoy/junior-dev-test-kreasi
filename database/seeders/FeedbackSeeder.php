<?php

namespace Database\Seeders;

use App\Models\Feedback;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FeedbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $feedback = [];
        for ($i = 1; $i <= 500; $i++){
            $feedback[] = [
                'name' => $faker->name(),
                'email' => $faker->email(),
                'rating' => $faker->numberBetween(1,5),
                'description' => $faker->text(800),
                'created_at' => $faker->dateTimeThisYear()
            ];
        }

        Feedback::insert($feedback);
    }
}
