<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

//use App\Message;    // add
use App\Task;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task;

        return view('tasks.create', [
            'task' => $task,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:191',   // add
            'content' => 'required|max:191',
           
            
        ]);

        $task = new Task;
        $task->title = $request->title;    // add
        $task->content = $request->content;
        $task->status = "xxx";//$request->status;
        $task->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $task = Task::find($id);

        return view('tasks.show', [
            'task' => $task,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $task = Task::find($id);

        return view('tasks.edit', [
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    
    {$this->validate($request, [
            'title' => 'required|max:191',   // add
            'content' => 'required|max:191',
            
        ]);

        $task = Task::find($id);
        $task->title = $request->title;    // add
        $task->content = $request->content;
        $task->save();
        
        return redirect('/');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $task = Task::find($id);
        $task->delete();

        return redirect('/');
    }
}
