<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class TaskController extends Controller
{
    //

    public function index(){
    $tasks = App\Task::all();
    //  $tasks=App\Task::incomplete();
     return view('welcome',compact('tasks'));
    }

    public function show($id){
     $task = App\Task::find($id);
     return view('show',compact('task'));
    }
}
