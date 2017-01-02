<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //dont guard any variable
    protected $guarded = [];

    //a task belongs to a project
    public function project()
    {
        return $this->belongsTo('App\Project');
    }
}
