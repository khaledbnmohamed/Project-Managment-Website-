<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompaniesController extends Controller
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
        $companies = Company::where('user_id',Auth::user()->id->get());
        //without the get ^^^^ NOTHING WILL BE SHOWN HERE
        return view('companies.Index',['companies'=>$companies]);
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
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   // This is correct implementation for store from a third party helper
    public function store(Request $request, Company $company)
        {
            //
            $customMessages = [
                    'required' => 'The :attribute field can not be blank.',
                    'unique' => 'The :attribute already exists',
                ];
            $request->validate([
                'name' => 'required|unique:companies|max:30',
                'description' => 'required|max:255',
            ], $customMessages);
    
            $company->user_id = $request->user()->id;
            $company->name = $request->name;
            $company->description = $request->description;
            if(!$company->save()){
                return redirect()
                ->route('companies.create')
                ->with('error', "Error creating company");
            }
            return redirect()
                ->route('companies.index')
                ->with('success', "Company created successfully");  
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
        // Show function takes an argument of Company object ($company). This object is injected by the framework and it's available. Why are you re-retrieve it from the database with it's id field and re-assign it to $company?﻿


        $company = Company::where('id',$id )->first();
        return view('companies.show',['company'=>$company]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $company = Company::where('id',$id )->first();
        return view('companies.edit',['company'=>$company]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,company $company)
    {   
        $this->validate($request, [
            'name'=>'required|max:90',
            'description'=>'required|max:255'            
        ]);
        $company->name = $request->name;
        $company->description = $request->description;
        $company->save();
        return redirect()
        ->route('companies.show', $company->id)
        ->with('success', "Company updated successfully");
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
