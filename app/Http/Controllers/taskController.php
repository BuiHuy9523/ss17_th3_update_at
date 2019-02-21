<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class taskController extends Controller
{
public function index()
{
    $tasks = \App\Tasks::all();
    return view('index', compact('task'));
}
public function create()
{
return view('add');
}
public function store(Request $request)
{
    $task = new Tasks();
    $task->Tasktitle = $request->inputTitle;
    $task->Content = $request->inputContent;
    $file = $request->inputFile;
    if(!$request->hasFile('inputFile')){
        $task->image = $request->inputFileName;
    }else{
        $fileName = $request->file('inputFile');
        $path = $fileName->store('image', 'public');
        $task->image = $path;
    }
    $task->save();
    return redirect()->route('task.index', compact('task'));

}
}
