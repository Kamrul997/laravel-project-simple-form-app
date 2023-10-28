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

        $newFileName = time() . '-'. $request->taskFile->getClientOriginalName();
    
        $request->taskFile->move(public_path('files'), $newFileName);
        

        $formData = new FormData;
        $formData -> task_title = $request['taskTitle'];
        $formData -> task_description = $request['taskDescription'];
        $formData -> task_startDate = $request['taskStartDate'];
        $formData -> task_deadline = $request['taskDeadline'];
        $formData -> select_maping = $request['selectMaping'];
        $formData -> select_priority = $request['selectPriority'];
        $formData -> select_user = $request['selectUser'];
        $formData -> task_remarks = $request['taskRemarks'];
        $formData -> task_links = $request['taskLinks'];
        $formData -> task_file = $newFileName;
        $formData->save();
        return redirect(route("homePage"));
    }
    
}
