<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class HomeController extends Controller
{
    public function home(){
        $tasks = TodoList::all();
        $data = compact('tasks');
        return view("todos.home.index")->with($data);
    }
}
