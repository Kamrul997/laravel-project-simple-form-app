<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class HomeController extends Controller
{
    public function home(){
        $tasks = FormData::all();
        $data = compact('tasks');
        return view("todos.home.index")->with($data);
    }
}
