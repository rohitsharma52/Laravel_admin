<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminContoller;
use App\Http\Controllers\admin\TeamController;
use App\Http\Controllers\front\HomeController;
/////////////////////////////// frontend route//////////////////////////
Route::get('/',[HomeController::class,'index'])->name('imdex');
//////////////////////////////admin routes////////////////////////////////
Route::get('/auth',[AdminContoller::class,'home'])->name('admin_home');
Route::get('/add_view_slider',[AdminContoller::class,'add_view_slider'])->name('add_view_slider');
Route::post('/add_slider',[AdminContoller::class,'add_slider'])->name('add_slider');
////////////////////////////Team Routes here/////////////////////////////////
Route::get('/add_team',[TeamController::class, 'add_team'])->name('add_team');
Route::get('/view_team',[TeamController::class,'view_team'])->name('view_team');
Route::post('/add_team_process',[TeamController::class,'add_team_process'])->name('add_team_process');
