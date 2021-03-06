<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Project;

class ProjectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$projects = DB::select('select * from projects');
        return view('project')->with('projects', $projects);
    }

    public function create(){
    	return view('forms.project_create');
    }

    public function store(){

        $project = new Project();

        $project->name = Input::get('name');
        $project->estimate_date = Input::get('estimate_date');
        $project->estimate_time = Input::get('estimate_time');
        $project->status = Input::get('status');
        $project->project_price = Input::get('project_price');
        $project->project_type = Input::get('project_type');

        $project->save();

        Session::flash('message', 'Cadastro registrado com sucesso!');
        return Redirect::to('projects');
    }

    public function show($id){

        $project = Project::find($id);        
        return view('forms.project_create')->with("project", $project);
    }


    public function edit($id){

        $project = Project::find($id);

        $project->name = Input::get('name');
        $project->estimate_date = Input::get('estimate_date');
        $project->estimate_time = Input::get('estimate_time');
        $project->status = Input::get('status');
        $project->project_price = Input::get('project_price');
        $project->project_type = Input::get('project_type');
        $project->save();

        Session::flash('message', 'Cadastro editado com sucesso!');
        return Redirect::to('projects');
    }


    public function delete($id){
        $project = Project::find($id);
        $project->delete();

        Session::flash('message', 'Cadastro deletado com sucesso!');
        return Redirect::to('projects');

    }

}
