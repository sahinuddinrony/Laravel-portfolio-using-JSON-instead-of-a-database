<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\WorkExperienceController;




Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/work_experience', [WorkExperienceController::class, 'index'])->name('work_experience');
Route::get('/project', [ProjectsController::class, 'index'])->name('project');

Route::get('/project/{id}', [HomeController::class, 'showProjectDetails'])->name('project.details');

// Route::get('/project/{id}', 'YourController@showProjectDetails')->name('project.details');


Route::get('/project1', function () {
    return view('project1');
})->name('project1');

Route::get('/project2', function () {
    return view('project2');
})->name('project2');



// Route::get('/', 'HomeController@index');
// Route::get('/work-experience', 'WorkExperienceController@index');
// Route::get('/projects', 'ProjectsController@index');
