<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class DetailsController extends Controller
{
    public function details($id){
        $task = TodoList::find($id);
        $data = compact('task');
        return view("todos.detailsTask.index")->with($data);
    }
}
