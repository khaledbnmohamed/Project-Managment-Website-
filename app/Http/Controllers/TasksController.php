<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use App\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        if(Auth::check()){ //check if user is logged in or not 
        // dd(Auth::user()->id);
        $tasks = Task::where('user_id',Auth::user()->id)->get();
        $projects = Project::where('user_id',Auth::user()->id)->get();

        //without the get ^^^^ NOTHING WILL BE SHOWN HERE
        return view('tasks.Index',['tasks'=>$tasks],['projects'=>$projects]);
         }
        return view('auth.login');

    }
    public function view($company,$project)
    {
        //

        if(Auth::check()){ //check if user is logged in or not 
        // dd(Auth::user()->id);
        if($project){

            // where([ ['status', '=', '1'], ['subscribed', '<>', '1'], ])
            $tasks = Task::where([ ['user_id',Auth::user()->id], [$project=>$user_id,Auth::user()->id] ])->get();
            
            return view('tasks.Index',['tasks'=>$tasks],['projects'=>$projects]);

        }
        $projects = Project::where('user_id',Auth::user()->id)->get();

        //without the get ^^^^ NOTHING WILL BE SHOWN HERE
        return view('tasks.Index',['tasks'=>$tasks],['projects'=>$projects]);
         }
        return view('auth.login');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // This is correct implementation for store from a third party helper
    public function store(Request $request, Task $task)
        {
            //
            $customMessages = [
                    'required' => 'The :attribute field can not be blank.',
                    'unique' => 'The :attribute already exists',
                ];
            $request->validate([
                'name' => 'required|unique:tasks|max:30',
                'description' => 'required|max:255',
            ], $customMessages);
    
            $task->user_id = $request->user()->id;
            $task->name = $request->name;
            $task->description = $request->description;
            if(!$task->save()){
                return redirect()
                ->route('tasks.create')
                ->with('error', "Error creating task");
            }
            return redirect()
                ->route('tasks.index')
                ->with('success', "Task created successfully");  
        }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        #we might not use this
        // Show function takes an argument of Task object ($task). This object is injected by the framework and it's available. Why are you re-retrieve it from the database with it's id field and re-assign it to $task?﻿


        $task = Task::where('id',$id )->first();
        return view('tasks.show',['task'=>$task]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $task = Task::where('id',$id )->first();
        return view('tasks.edit',['task'=>$task]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,task $task)
    {   
        $this->validate($request, [
            'name'=>'required|max:90',
            'description'=>'required|max:255'            
        ]);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->save();
        return redirect()
        ->route('tasks.show', $task->id)
        ->with('success', "Task updated successfully");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($comapny);
    }
}
