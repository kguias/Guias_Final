<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            'Introduction to Computing',
            'Computer Programming 1',
            'Computer Programming 2',
            'Data Structures and Algorithms',
            'Object-Oriented Programming',
            'Database Management Systems',
            'Web Development',
            'Advanced Web Technologies',
            'Systems Analysis and Design',
            'Operating Systems',
            'Computer Networks',
            'Network Security',
            'Mobile Application Development',
            'Software Engineering',
            'Human Computer Interaction',
            'Information Management',
            'Integrative Programming',
            'Capstone Project 1',
            'Capstone Project 2',
            'IT Practicum',
        ];

        $firstNames = ['Juan', 'Maria', 'Jose', 'Ana', 'Carlo', 'Rosa', 'Miguel', 'Sofia',
                       'Luis', 'Elena', 'Mark', 'Grace', 'John', 'Claire', 'Kevin', 'Jessa',
                       'Ryan', 'Paula', 'James', 'Kristine'];

        $lastNames  = ['Santos', 'Reyes', 'Cruz', 'Bautista', 'Ocampo', 'Garcia', 'Mendoza',
                       'Torres', 'Flores', 'Villanueva', 'Ramos', 'Aquino', 'Dela Cruz',
                       'Castillo', 'Morales', 'Diaz', 'Ramirez', 'Lopez', 'Gonzales', 'Navarro'];

        for ($i = 0; $i < 500; $i++) {
            Student::create([
                'name'   => $firstNames[array_rand($firstNames)] . ' ' . $lastNames[array_rand($lastNames)],
                'gender' => rand(0, 1) ? 'Male' : 'Female',
                'age'    => rand(18, 25),
                'course' => $courses[array_rand($courses)],
            ]);
        }
    }
}