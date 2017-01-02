<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //dont guard any variable
    protected $guarded = [];
    
    //a project has one or many tasks
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }
}
