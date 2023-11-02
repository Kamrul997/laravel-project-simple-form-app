<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class HomeController extends Controller
{
    public function home(){
        $tasks = FormData::withoutTrashed()->Paginate(10);
        $data = compact('tasks');

        // return $tasks;
        return view("todos.home.index")->with($data);
    }
}
