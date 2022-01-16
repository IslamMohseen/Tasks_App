<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
class TasksController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $tasks = Task::all();
        return view('pages.tasks',compact('tasks'));
    }

    public function show($id)
    {
        $tasks = Task::find($id);
        return view('pages.showtask',compact('tasks'));
    }

    public function create()
    {    
        return view('pages.createtask');
    }

    public function store(Request $request)
    {    
       
        $task = new Task();
        $task->title = $request->tasktitle;
        $task->description = $request->taskdescription;
        $task->save();

        $request->session()->flash('success','Task Created Successfully');

        return redirect('/tasks');
    }

    public function edit($id)
    {          
        $task = Task::find($id);

        return view('pages.edit',compact('task'));
        
    }
    public function update(Request $request, $id)
    {          
        $task = Task::find($id);
        $task->title = $request->tasktitle;
        $task->description = $request->taskdescription;
        $task->save();
        
        $request->session()->flash('success','Task Updated Successfully');

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        session()->flash('success','Task Deleted Successfully');

        return redirect('/tasks');
    }
    
    public function complete($id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();

        session()->flash('success','Task Completed Successfully');

        return redirect('/tasks');
    }
}
