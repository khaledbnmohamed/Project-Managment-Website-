<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Comment $comment)
    {
        {
            //
            $customMessages = [
                    'required' => 'The :attribute field can not be blank.',
                    'unique' => 'The :attribute already exists',
                ];
            $request->validate([
                'body' => 'required|unique:comments|max:30',
                'url' => 'required|max:255',
            ], $customMessages);
            
            //ini_set('error_reporting', E_STRICT);
            $comment->commentable_id = $request->commentable_id;
            $comment->body = $request->body;
            $comment->url = $request->url;
            $comment->commentable_type = $request->commentable_type;
            $comment->user_id = $request->user()->id;

            if(!$comment->save()){
                return redirect()
                ->route('companies.create')
                ->with('error', "Error creating comment");
            }
            return redirect()
                ->route('companies.index')
                ->with('success', "comment added successfully");  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        $comments = Comment::where('id',$id )->first();
        $comments =$project->comments;
        return view('projects.show',['project'=>$project,'comments'=>$comments]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
