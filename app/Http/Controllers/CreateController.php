<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class CreateController extends Controller
{
    public function create(){
        return view("todos.createTask.index");
    }

    public function createNewTask(Request $request){
        // dd($request->all());
        $request->validate(
            [
                'taskTitle' => 'required|max:20',
                'taskDescription' => 'required|max:300',
                'taskStartDate' => 'required',
                'taskDeadline' => 'required',
                'selectMaping' => 'required',
                'selectPriority' => 'required',
                'selectUser' => 'required',
                'taskRemarks' => 'required',
                'taskLinks' => 'required',
                'taskFile' => 'required'
            ]
            );
        $todoList = new FormData;
        $todoList->title=$request['taskTitle'];
        $todoList->description=$request['taskDescription'];
        $todoList->start_date=$request['taskStartDate'];
        $todoList->deadline=$request['taskDeadline'];
        $todoList->save();
        return redirect(route("homePage"));
    }
    
}
