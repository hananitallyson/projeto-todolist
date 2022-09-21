<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tasks = Task::all()->where('user_id', auth()->id());
        $message = $request->session()->get('message');

        return view('task.index', [
            'tasks' => $tasks
        ])->with('message', $message);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Task::create([
            'description' => request('description'),
            'user_id' => auth()->user()->id
        ]);

        return to_route('tasks.index')
            ->with('message', "Task added successfully!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task, Request $request)
    {
        $message = $request->session()->get('message');

        return view('task.show', [
            'task' => $task,
            'user' => auth()->user()
        ])->with('message', $message);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        return view('task.edit', [
            'task' => $task,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        Task::find($task->id)->update($request->only('description'));

        return redirect()->to(route('tasks.show', [
            'task' => $task,
        ]))->with('message', "Task edited successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        $task = Task::find($task->id);
        $task->delete();

        return to_route('tasks.index')
            ->with('message', "Task removed successfully!");
    }

    public function check(Task $task) {
        Task::where('id', $task->id)->update(['checked' => 1]);

        return redirect()->to(route('tasks.show', [
            'task' => $task,
        ]))->with('message', "Task done successfully!");
    }
}
