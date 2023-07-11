<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        $tasks = Task::getUserTasks($request->user()->id);
        return view('todo', compact('tasks'));
    }

    public function store(Request $request)
    {
        $requestData = $request->validate([
            'taskId' => 'nullable',
            'taskName' => 'required|string',
            'taskDescription' => 'required|string',
            'priority' => 'required|string',
        ]);

        $task = new Task();
        $task->userId = $request->user()->id;
        $task->taskName = $requestData['taskName'];
        $task->taskDescription = $requestData['taskDescription'];
        $task->priority = $requestData['priority'];
        $task->save();

        return redirect()->route('tasks.index')->with('message', 'Task created successfully.');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        if ($task) {
            return view('edit', compact('task'));
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }

    public function update(Request $request, $id)
    {
        $requestData = $request->validate([
            'taskName' => 'required|string',
            'taskDescription' => 'required|string',
            'priority' => 'required|string',
        ]);

        $task = Task::find($id);
        if ($task) {
            $task->taskName = $requestData['taskName'];
            $task->taskDescription = $requestData['taskDescription'];
            $task->priority = $requestData['priority'];
            $task->save();

            return redirect()->route('tasks.index')->with('message', 'Task updated successfully.');
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }

    public function delete($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
            return redirect()->route('tasks.index')->with('message', 'Task deleted successfully.');
        } else {
            return redirect()->route('tasks.index')->with('error', 'Task not found');
        }
    }
}
