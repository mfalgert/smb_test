<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::model('tasks', 'Task');
Route::model('projects', 'Project');

Route::resource('/', 'ProjectsController');
Route::resource('projects', 'ProjectsController');
Route::resource('projects.tasks', 'TasksController');
