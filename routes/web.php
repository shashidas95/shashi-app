<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//pages routes
Route::get('/', [HomeController::class, 'index']);
Route::post('/contact', [ContactController::class, 'index']);
Route::get('/resume', [ResumeController::class, 'index']);
Route::get('/projects', [ProjectController::class, 'index']);


//Ajax call routes
Route::get('/heroData', [HomeController::class, 'heroData']);
Route::get('/aboutData', [HomeController::class, 'aboutData']);
Route::get('/socilaData', [HomeController::class, 'socilaData']);
Route::post('/contactRequest', [ContactController::class, 'contactRequest']);
Route::get('/resumeLink', [ResumeController::class, 'resumeLink']);
Route::get('/experiencesData', [ResumeController::class, 'experiencesData']);
Route::get('/educationData', [ResumeController::class, 'educationData']);
Route::get('/skillsData', [ResumeController::class, 'skillsData']);
Route::get('/languageData', [ResumeController::class, 'languageData']);
Route::post('/projectData', [ProjectController::class, 'projectData']);

