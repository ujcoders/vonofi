<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class SpinnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed multiple entries with spinner values (Yes or No)
        $spinnerValues = [
            ['spinner_value' => true],  // Yes
            // ['spinner_value' => false], // No
            // ['spinner_value' => true],  // Yes
            // ['spinner_value' => false], // No
            // ['spinner_value' => true],  // Yes
        ];

        foreach ($spinnerValues as $value) {
            Quiz::create($value);
        }
    }
}
