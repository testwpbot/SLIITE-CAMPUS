<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $stats = [
            ['value' => '12K+', 'label' => 'Active Students'],
            ['value' => '150+', 'label' => 'Expert Lecturers'],
            ['value' => '85+', 'label' => 'Courses'],
            ['value' => '98%', 'label' => 'Employment Rate'],
        ];

        $programs = [
            ['title' => 'Computing & IT', 'icon' => '💻', 'desc' => 'Software Engineering, Cyber Security, Data Science'],
            ['title' => 'Business Management', 'icon' => '📊', 'desc' => 'Marketing, Finance, HR & Entrepreneurship'],
            ['title' => 'Engineering', 'icon' => '⚙️', 'desc' => 'Civil, Mechanical & Electrical Engineering'],
            ['title' => 'Hospitality', 'icon' => '✈️', 'desc' => 'Hotel Management & Tourism'],
        ];

        return view('landing', compact('stats','programs'));
    }
}
