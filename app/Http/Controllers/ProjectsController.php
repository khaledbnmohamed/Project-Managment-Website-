<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
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
        $projects = project::where('user_id',Auth::user()->id->get());
        //without the get ^^^^ NOTHING WILL BE SHOWN HERE
        return view('projects.Index',['projects'=>$projects]);
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
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // This is correct implementation for store from a third party helper
    public function store(Request $request, project $project)
        {
            //
            $customMessages = [
                    'required' => 'The :attribute field can not be blank.',
                    'unique' => 'The :attribute already exists',
                ];
            $request->validate([
                'name' => 'required|unique:projects|max:30',
                'description' => 'required|max:255',
            ], $customMessages);
    
            $project->user_id = $request->user()->id;
            $project->name = $request->name;
            $project->description = $request->description;
            if(!$project->save()){
                return redirect()
                ->route('projects.create')
                ->with('error', "Error creating project");
            }
            return redirect()
                ->route('projects.index')
                ->with('success', "project created successfully");  
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
        // Show function takes an argument of project object ($project). This object is injected by the framework and it's available. Why are you re-retrieve it from the database with it's id field and re-assign it to $project?﻿


        $project = project::where('id',$id )->first();
        return view('projects.show',['project'=>$project]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = project::where('id',$id )->first();
        return view('projects.edit',['project'=>$project]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,project $project)
    {   
        $this->validate($request, [
            'name'=>'required|max:90',
            'description'=>'required|max:255'            
        ]);
        $project->name = $request->name;
        $project->description = $request->description;
        $project->save();
        return redirect()
        ->route('projects.show', $project->id)
        ->with('success', "project updated successfully");
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
