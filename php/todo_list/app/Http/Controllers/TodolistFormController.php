<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodolistFormController extends Controller
{
    //
    // タスクを一覧で表示
    public function index()
    {
        $todos = Todo::orderBy('id', 'asc')->get();
        return view('todo_list', [
            "todos" => $todos
        ]);
    }

    // タスク作成画面を表示
    public function createPage()
    {
        return view('todo_create');
    }

    // タスクを登録
    public function create(Request $request)
    {
        $todo = new Todo();
        $todo->task = $request->task;
        $todo->task_limited_at = $request->task_limited_at;
        $todo->task_status = STATUS_BEGIN;

        $todo->save();

        return redirect('/');
    }

    // ここより上は省略

    // タスク編集画面を表示
    public function editPage($id)
    {
        $todo = Todo::find($id);
        return view('todo_edit', [
            "todo" => $todo
        ]);
    }

    // タスクを更新
    public function edit(Request $request)
    {
        Todo::find($request->id)->update([
            'task' => $request->task,
            'task_limited_at' => $request->task_limited_at,

        ]);
        return redirect('/');
    }

    // タスク削除画面を表示
    public function deletePage($id)
    {
        $todo = Todo::find($id);
        return view('todo_delete', [
            "todo" => $todo
        ]);
    }


    // タスクを削除
    public function delete(Request $id)
    {
        Todo::find($id)->delete();
        return redirect('/');
    }

    // 以下省略
}
