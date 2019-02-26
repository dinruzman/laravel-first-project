<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1.query database for collecting data from table tasks
        $tasks = \App\Task::all();
        //Task::all() check 
        //2.return database to view
        //view refer to folder resources/views
        //compact ('tasks'); = [tasks];
        return view('tasks.index',compact('tasks')); 
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
    public function store(Request $request)
    {
        //
        //dd($request->all());
        \App\Task::create([
            'name' => $request->name,
            'pic' => $request->pic,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
        ]);
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = \App\Task::find($id);

        return view('tasks.edit',compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($id,$request->all());
        $tasks = \App\Task::find($id);
        $tasks->update([  
            'name' => $request->name,
            'pic' => $request->pic,
            'email' => $request->email,
            'phone_no' => $request->phone_no,
        ]);

        return redirect('tasks');
        //$tasks = \App\Task::all();
        //return view('home',compact('tasks'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tasks = \App\Task::find($id);
        $tasks->delete();

        return redirect('tasks');
    }
}
