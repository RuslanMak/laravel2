<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
      $attributes = request()->validate(['description' => 'required']); //validation 

      $project->addTask($attributes); // i have added this func in Project.php
      // // or
      // Task::create([
      //   'project_id' => $project->id,
      //   'description' => request('description')
      // ]);

      return back();
    }

    public function update(Task $task)
    {
      // dd($task);
      // dd(request()->all());
      $task->update([
        'completed' => request()->has('completed')
      ]);

      return back();
    }
}
