<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SchoolDay;

class SchoolDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 60; $i++) {
            SchoolDay::create([
                'date' => now()->subDays($i),
                'attendance' => rand(200,500),
                'holiday' => rand(0,10) == 1
            ]);
        }
    }
}