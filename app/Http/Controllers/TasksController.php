<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Project;
use App\Task;

class TasksController extends Controller
{
    //the name field is required
    protected $valid = [
        'name' => ['required', 'min:1'],
    ];

    //list all tasks of a project
    public function index(Project $project)
    {
        return view('tasks.index', compact('project'));
    }
 
    //create new task
    public function create(Project $project)
    {
        return view('tasks.create', compact('project'));
    }

    //store new task and return to all tasks page of project
    public function store(Project $project, Request $request)
    {
        $this->validate($request, $this->valid);
        $input = Input::all();
        $input['project_id'] = $project->id;
        Task::create($input);

        return Redirect::route('projects.show', $project->id)->with('message', "Task \"".$input['name']."\" was created");
    }
 
    //show task description
    public function show(Project $project, Task $task)
    {
        return view('tasks.show', compact('project', 'task'));
    }
 
    //edit task
    public function edit(Project $project, Task $task)
    {
        return view('tasks.edit', compact('project', 'task'));
    }

    //update task and return to all tasks page of project
    public function update(Project $project, Task $task, Request $request)
    {
        $this->validate($request, $this->valid);
        $input = Input::all();
        $task->update($input);
        $string = var_export($input, true);
     
        return Redirect::route('projects.show', $project->id)->with('message', "Task was updated");
    }
 
    //destroy task and return to all tasks page of project
    public function destroy(Project $project, Task $task)
    {
        $task->delete();
     
        return Redirect::route('projects.show', $project->id)->with('message', "Task \"".$task->name."\" was deleted");
    }
}
