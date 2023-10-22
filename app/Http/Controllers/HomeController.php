<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $data = json_decode(file_get_contents(storage_path('data/home.json')), true);
    return view('home', compact('data'));
}

public function showProjectDetails($id)
{
    // Read the JSON data
    $projects = json_decode(File::get(storage_path('data/projects.json')), true);

    // Find the project with the selected ID
    $selectedProject = collect($projects)->firstWhere('id', $id);

    return view('project_details', compact('selectedProject'));
}

}
