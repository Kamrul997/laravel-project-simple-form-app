<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class UpdateController extends Controller
{
    public function edit($id){
        $task = TodoList::find($id);
        $data = compact('task');
        return view("todos.updateTask.index")->with($data);
    }

    public function update(Request $request){
        $request->validate(
            [
                'taskTitle' => 'required',
                'taskDescription' => 'required',
                'taskStartDate' => 'required',
                'taskDeadline' => 'required'
            ]
            );
            // dd($request->all());
        $id = request('id');
        $todoList = TodoList::find($id);
        $todoList->title = $request['taskTitle'];
        $todoList-> description = $request['taskDescription'];
        $todoList-> start_date = $request['taskStartDate'];
        $todoList-> deadline = $request['taskDeadline'];
        $todoList-> save();

        return redirect(Route("homePage"));
    }
}
