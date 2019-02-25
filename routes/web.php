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

// use Illuminate\Filesystem\Filesystem;
// app()->singleton('App\Services\Twitter', function() {
//   // dd('called');
//   return new \App\Services\Twitter('djshf;dsl;sfdkjflkd');
// });

// use App\Repositories\UserRepository;
use App\Services\Twitter;

Route::get('/', function (Twitter $twitter) {
  dd($twitter);

    return view('welcome');
});

/*
  GET /projects (index)
  GET /projects/create (create)
  GET /projects/1 (show)
  POST /projects (store)
  GET /projects/1/edit (edit)
  PATCH /projects/1 (update)
  DELETE /projects/1 (destroy)
*/

// Route::get('/projects', 'ProjectsController@index');
// Route::get('/projects/{project}', 'ProjectsController@show');
// Route::get('/projects/create', 'ProjectsController@create');
// Route::post('/projects', 'ProjectsController@store');
// Route::get('/projects/{project}/edit', 'ProjectsController@edit');
// Route::patch('/projects/{project}', 'ProjectsController@update');
// Route::delete('/projects/{project}', 'ProjectsController@destroy');
// OR JUSR
Route::resource('projects', 'ProjectsController'); //это тоже самое что и сверху но в 1 строке)))

Route::post('projects/{project}/tasks', 'ProjectTasksController@store');
Route::patch('/tasks/{task}', 'ProjectTasksController@update');
