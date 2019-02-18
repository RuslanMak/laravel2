@extends('layout')

@section('content')
  <h1 class="title">Create a New Projects</h1>

  <form class="" action="/projects" method="post">
    {{ csrf_field() }}

    <div class="field">
      <label class="label" for="title">Project Title</label>

      <div class="control">
        <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}"> {{-- need add required --}}
      </div>
    </div>

    <div class="field">
      <label class="label" for="description">Project Description</label>

      <div class="control">
        <textarea
          name="description"
          class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}"
          required
        >
          {{ old('description') }}
        </textarea>
      </div>
    </div>

    <div class="field">
      <div class="control">
        <button class="button is-link" type="submit">Create Project</button>
      </div>
    </div>

    @include('errors')

  </form>
@endsection
