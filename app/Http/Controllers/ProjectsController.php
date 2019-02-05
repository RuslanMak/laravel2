<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      // $projects = Project::all();
      $projects = \App\Project::all();

      return $projects;
      return view('projects.index');
    }
}
