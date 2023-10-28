<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class UpdateController extends Controller
{
    public function edit($id){
        $task = FormData::find($id);
        $data = compact('task');
        return view("todos.updateTask.index")->with($data);
    }

    public function update(Request $request){
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
                'taskLinks' => 'required'
            ]
            );
    //    dd($request->all());
        $id = request('id');
        $formData = FormData::find($id);
        $formData -> task_title = $request['taskTitle'];
        $formData -> task_description = $request['taskDescription'];
        $formData -> task_startDate = $request['taskStartDate'];
        $formData -> task_deadline = $request['taskDeadline'];
        $formData -> select_maping = $request['selectMaping'];
        $formData -> select_priority = $request['selectPriority'];
        $formData -> select_user = $request['selectUser'];
        $formData -> task_remarks = $request['taskRemarks'];
        $formData -> task_links = $request['taskLinks'];
        if($request['taskFile'] != null){
    
            $newFileName = time() . '-'. $request->taskFile->getClientOriginalName();
            $request->taskFile->move(public_path('files'), $newFileName);
            $formData -> task_file = $newFileName;
        }
        else{
            $formData -> task_file = $request['oldTask'];
        }
        $formData -> save();

        return redirect(Route("homePage"));
    }
}
