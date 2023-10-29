<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class HomeController extends Controller
{
    public function home(){
        $tasks = FormData::all();
        $tasks = FormData::Paginate(5);
        $data = compact('tasks');
        return view("todos.home.index")->with($data);
    }
}
