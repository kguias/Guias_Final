<?php

namespace App\Http\Controllers;

use App\Models\SchoolDay;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $schoolDays = SchoolDay::orderBy('date')
            ->get()
            ->map(fn($day) => [
                'date'       => $day->date->format('Y-m-d'),
                'attendance' => $day->attendance,
                'holiday'    => $day->holiday,
            ]);

        return response()->json($schoolDays);
    }
}