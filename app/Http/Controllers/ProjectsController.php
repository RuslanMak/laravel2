<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
      $projects = Project::all();
      // $projects = \App\Project::all();

      // return $projects;
      return view('projects.index', compact('projects'));
    }

    public function create()
    {
      return view('projects.create');
    }

    public function show()
    {

    }

    public function edit($id)
    {
      // return $id;

      $project = Project::findOrFail($id);

      return view('projects.edit', compact('project'));
    }

    public function update($id)
    {
      // dd('hello!');
      // dd(request()->all());

      $project = Project::findOrFail($id);

      $project->title = request('title');
      $project->description = request('description');

      $project->save();

      return redirect('/projects');
    }

    public function destroy($id)
    {
      // dd(request()->all());
      Project::findOrFail($id)->delete();

      return redirect('/projects');
    }

    public function store()
    {
      // return request()->all();
      // return request('description');

      $project = new Project();

      $project->title = request('title');
      $project->description = request('description');

      $project->save();
      return redirect('/projects');
    }
}
