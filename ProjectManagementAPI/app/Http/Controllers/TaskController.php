<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\TaskRemark;

use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{

    // get task

    public function index($projectId)
    {
        return response()->json(Task::where('project_id', $projectId)->where('user_id', Auth::id())->get());
    }
//  insert task

    public function store(Request $request, $projectId)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'status' => 'in:Pending,In Progress,Completed',
        ]);

        $task = Task::create([
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status ?? 'Pending',
            'project_id' => $projectId,
            'user_id' => Auth::id(),
        ]);

        return response()->json($task, 201);
    }
//  update task

    public function update(Request $request, Task $task)
    {
        if ($task->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $task->update($request->only('title', 'description'));

        return response()->json($task);
    }
// status update task
    public function updateStatus(Request $request, $id)
    {
        // Validate request
        $request->validate([
            'status' => 'required|in:Pending,In Progress,Completed',
        ]);

        // Find the task by ID
        $task = Task::findOrFail($id);

        // Update task status
        $task->status = $request->status;
        $task->save();

        return response()->json([
            'message' => 'Task status updated successfully!',
            'task' => $task
        ], 200);
    }

    // delete task
    public function destroy(Task $task)
    {
        if ($task->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $task->delete();
        return response()->json(['message' => 'Task deleted']);
    }

    // Add a remark to a task
    public function addRemark(Request $request, $id)
    {
        $request->validate([
            'remark' => 'required|string',
            'date' => 'required|date',
        ]);

        $task = Task::findOrFail($id);

        $remark = TaskRemark::create([
            'task_id' => $task->id,
            'remark' => $request->remark,
            'date' => $request->date,
        ]);

        return response()->json([
            'message' => 'Remark added successfully!',
            'remark' => $remark
        ], 201);
    }

     // get report

     public function projectReport($projectId)
     {
         $tasks = Task::where('project_id', $projectId)
             ->with('remarks')
             ->get();
 
         return response()->json([
             'project_id' => $projectId,
             'tasks' => $tasks
         ], 200);
     }
}
