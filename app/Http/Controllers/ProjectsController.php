<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

use App\Project;

class ProjectsController extends Controller
{
	//the name field is required
	protected $valid = [
		'name' => ['required', 'min:1'],
	];

	//list all projects
    public function index()
	{
		$projects = Project::all();

		return view('projects.index', compact('projects'));
	}

	//create project
	public function create()
	{
		return view('projects.create');
	}
 
 	//store created project and return to all projects page
	public function store(Request $request)
	{
		$this->validate($request, $this->valid);
		$input = Input::all();
		Project::create($input);
	 
		return Redirect::route('projects.index')->with('message', "Project \"".$input['name']."\" was created");
	}
 
 	//show tasks of project
	public function show(Project $project)
	{
		return view('projects.show', compact('project'));
	}
 
 	//edit project
	public function edit(Project $project)
	{
		return view('projects.edit', compact('project'));
	}
 
 	//update project and return to all projects page
	public function update(Project $project, Request $request)
	{
		$this->validate($request, $this->valid);
		$input = Input::all();
		$project->update($input);
	 
		return Redirect::route('projects.index')->with('message', "Project was updated");
	}
 
 	//delete project and return to all projects page
	public function destroy(Project $project)
	{
		$project->delete();
	 
		return Redirect::route('projects.index')->with('message', "Project \"".$project->name."\" was deleted");
	}
}
