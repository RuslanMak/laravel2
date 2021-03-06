@extends('layout')

@section('content')
  <h1 class="title">Edit Project</h1>

  <form class="" action="/projects/{{ $project->id }}" method="POST" style="margin-bottom: 1em;">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}

    <div class="field">
      <label class="label" for="title">Title</label>

      <div class="control">
        <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
      </div>
    </div>

    <div class="field">
      <label class="label" for="description">Description</label>
      <div class="control">
        <textarea name="description" class="textarea">{{ $project->description }}</textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button class="button is-link" type="submit">Update Project</button>
      </div>
    </div>
  </form>

  <form class="" action="/projects/{{ $project->id }}" method="post">
    @method('DELETE')
    @csrf
    {{-- or --}}
    {{-- {{ method_field('DELETE') }}
    {{ csrf_field() }} --}}
    <div class="field">
      <div class="control">
        <button class="button" type="submit">Delete Project</button>
      </div>
    </div>
  </form>
@endsection
