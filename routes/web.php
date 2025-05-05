<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResumeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//page route
Route::get('/', [HomeController::class, 'page']);
Route::get('/contact', [ContactController::class, 'page']);
Route::get('/projects', [ProjectController::class, 'page']);
Route::get('/resume', [ResumeController::class, 'page']);


//ajax call route
Route::get('/heroData',[HomeController::class, 'heroData']);
Route::get('/aboutData',[HomeController::class, 'aboutData']);
Route::get('/socialData',[HomeController::class, 'socialData']);

Route::get('/projectsData',[ProjectController::class, 'projectsData']);

Route::get('/resumeLink',[ResumeController::class, 'resumeLink']);
Route::get('experiemcesData',[ResumeController::class, 'experiemcesData']);
Route::get('/educationData',[ResumeController::class, 'educationData']);
Route::get('/skillsData',[ResumeController::class, 'skillsData']);
Route::get('/languagesData',[ResumeController::class, 'languagesData']);

Route::get('/contactRequest',[ContactController::class, 'contactRequest']);
