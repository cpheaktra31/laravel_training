<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;
use Illuminate\Support\Facades\DB;

class TodoListController extends Controller
{
    function index() {
        // $todos = DB::select("SELECT * FROM todo_lists");
        $todos = TodoList::all()->where('status', '>=', 1);
        return view('todolist.index', compact('todos'));
    }

    function create() {

    }

    function store(Request $request) {
        $todo = $request->all();
        TodoList::create($todo);
        return back();
    }

    function show() {

    }

    function update() {

    }

    function destroy() {

    }
}
