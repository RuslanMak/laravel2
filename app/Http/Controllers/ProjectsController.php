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

    public function show(Project $project)
    {
      // $project = Project::findOrFail($id);
      return view('projects.show', compact('project'));
    }

    // public function edit($id)
    public function edit(Project $project)
    {
      // $project = Project::findOrFail($id);
      return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
      $project->update(request(['title', 'description']));

      return redirect('/projects');
    }

    public function destroy(Project $project)
    {
      $project->delete();

      return redirect('/projects');
    }

    public function store()
    {
      // dd(request()->all());
      // dd(request('title'));
      // dd(request(['title', 'description']));
      Project::create(request(['title', 'description']));            // при этом способе надо настраивать в Project.php
      return redirect('/projects');
    }
}
