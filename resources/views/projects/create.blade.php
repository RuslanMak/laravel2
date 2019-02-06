<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Create a New Projects</h1>

    <form class="" action="/projects" method="post">
      {{-- {{ csrf_field() }} --}}
      @csrf
      <div class="">
        <input type="text" name="title" value="" placeholder="Project title">
      </div>

      <div class="">
        <textarea name="description" rows="8" cols="80" placeholder="Project description"></textarea>
      </div>

      <div class="">
        <button type="submit">Create Project</button>
      </div>

    </form>
  </body>
</html>
