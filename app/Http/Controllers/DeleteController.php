<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class DeleteController extends Controller
{
    public function delete($id){
        TodoList::find($id)->delete();
        return redirect(route("homePage"));
    }
}
