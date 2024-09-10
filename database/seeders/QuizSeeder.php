<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert default spinner value (this will be either 'No' or 'Yes')
        Quiz::create([
            'spinner_value' => false, // By default 'No'
        ]);

        // You can seed more data or random values as needed
        // For example, creating multiple quiz data with random values
        for ($i = 0; $i < 10; $i++) {
            Quiz::create([
                'spinner_value' => rand(0, 1) == 1, // Randomly 'Yes' (true) or 'No' (false)
            ]);
        }
    }
}
