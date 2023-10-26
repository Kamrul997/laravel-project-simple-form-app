<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormData;

class DeleteController extends Controller
{
    public function delete($id){
        FormData::find($id)->delete();
        return redirect(route("homePage"));
    }
}
