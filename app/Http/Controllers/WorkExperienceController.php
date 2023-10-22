<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkExperienceController extends Controller
{
    public function index()
{
    $data = json_decode(file_get_contents(storage_path('data/work_experience.json')), true);
    return view('work_experience', compact('data'));
}

}
