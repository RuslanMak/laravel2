<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // protected $fillable = [   // create только с полями которые перечислены тут
    //   'title', 'description'
    // ];

    protected $guarded = []; // create со всеми полями (можно задать любые данные)

    public function tasks()
    {
      return $this->hasMany(Task::class);
    }

    public function addTask($description)
    {
      $this->tasks()->create(compact('description'));
      // // or
      // return Task::create([
      //   'project_id' => $this->id,
      //   'description' => $description
      // ]);
    }
}
