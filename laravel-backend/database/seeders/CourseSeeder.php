<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['course_name' => 'Introduction to Computing',         'department' => 'Core'],
            ['course_name' => 'Computer Programming 1',            'department' => 'Core'],
            ['course_name' => 'Computer Programming 2',            'department' => 'Core'],
            ['course_name' => 'Data Structures and Algorithms',    'department' => 'Core'],
            ['course_name' => 'Object-Oriented Programming',       'department' => 'Core'],
            ['course_name' => 'Database Management Systems',       'department' => 'Core'],
            ['course_name' => 'Web Development',                   'department' => 'Web'],
            ['course_name' => 'Advanced Web Technologies',         'department' => 'Web'],
            ['course_name' => 'Systems Analysis and Design',       'department' => 'Systems'],
            ['course_name' => 'Operating Systems',                 'department' => 'Systems'],
            ['course_name' => 'Computer Networks',                 'department' => 'Networks'],
            ['course_name' => 'Network Security',                  'department' => 'Networks'],
            ['course_name' => 'Mobile Application Development',    'department' => 'Mobile'],
            ['course_name' => 'Software Engineering',              'department' => 'Core'],
            ['course_name' => 'Human Computer Interaction',        'department' => 'Core'],
            ['course_name' => 'Information Management',            'department' => 'Core'],
            ['course_name' => 'Integrative Programming',           'department' => 'Core'],
            ['course_name' => 'Capstone Project 1',                'department' => 'Capstone'],
            ['course_name' => 'Capstone Project 2',                'department' => 'Capstone'],
            ['course_name' => 'IT Practicum',                      'department' => 'Practicum'],
        ];

        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}