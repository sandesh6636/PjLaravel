<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['userId', 'taskName', 'taskDescription', 'priority'];

    public static function updateOrCreateTask($requestData)
    {
        if (isset($requestData['taskId'])) {
            // Update an existing task
            $task = self::find($requestData['taskId']);
            if ($task) {
                $task->update([
                    'taskName' => $requestData['taskName'],
                    'taskDescription' => $requestData['taskDescription'],
                    'priority' => $requestData['priority'],
                ]);
                return "Task updated successfully!";
            } else {
                return "Error updating task: Task not found";
            }
        } else {
            // Add a new task
            self::create([
            //   'userId' =>  $request->user()->id,
                'taskName' => $requestData['taskName'],
                'taskDescription' => $requestData['taskDescription'],
                'priority' => $requestData['priority'],
            ]);
            return "Task added successfully!";
        }
    }

    public static function deleteTask($taskId)
    {
        $task = self::find($taskId);
        if ($task) {
            $task->delete();
            return "Task deleted successfully!";
        } else {
            return "Error deleting task: Task not found";
        }
    }

    public static function getUserTasks($userId)
    {
        return self::where('userId', $userId)->get();
    }
}


