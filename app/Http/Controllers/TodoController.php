<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TodoController extends Controller
{
    public function index () {
        $todos = Todo::all();
        return view('todos.index',compact('todos'));
    }

    public function create () {
        return view('todos.create');
    }
    public function show (Todo $todo) {
        return view('todos.show',compact('todo'));
    }
    public function store (Request $request) {
        $rules = [
            'title' => 'required|max:255',
        ];
        $message = [
            'title.max' => 'Todo title should not be greater than 255 chars.',
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails()) {
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        Todo::create($request->all());
        return redirect()->back()->with('message','Todo Created Successfully');
    }
    public function edit (Todo $todo) {
        return view('todos.edit',compact('todo'));
    }
    public function update(Request $request,Todo $todo) 
    { 
        // dd($request->all());
        //   $todo = Todo::find($id);
        $todo->update(['title' => $request->title]);
        return redirect(route('todo.index'))->with('messsage','updated');
    }
    public function delete(Request $request,$id)
    {
        $todo =  Todo::find($id)->delete();
        return redirect(route('todo.index'))->with('messsage','updated');
        // dd($todo);
    }
}
