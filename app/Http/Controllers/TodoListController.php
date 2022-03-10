<?php

namespace App\Http\Controllers;

use App\Models\todoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
   
    public function index()
    {
        $todolists=Todolist::all();
        return view('home',compact('todolists'));
    }

  
    public function store(Request $request)
    {
        $data=$request->validate([
            'content'=>'required'
        ]);

        Todolist::create($data);
        return back();
    }

 

   
    public function destroy(todoList $todoList)
    {
        $todoList->delete();
        return back();
    }
    
 /* public function updateTodoById($id,todoList $todoList)
   {
    
        $validatedData = $request->valtodoListidate([
       'todo-description' => 'required|max:5000',
          'todo-status' => 'required'
       ]);
      
     
        $todo = Todo::find($id);
    
        if (isset($request['todo-title'])) {
          $todo->title = $request['todo-title'];
        }
        if (isset($request['todo-description'])) {
          //$todo->description = $request['todo-description'];
        }
        if (isset($request['todo-status'])) {
          $todo->status = $request['todo-status'];
        }
      
        $todo->update();
      
        return redirect('/todo/' . $id);
     } */ 
}
