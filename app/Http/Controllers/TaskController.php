<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Task\CreateTaskService;
use App\Services\Task\DeleteTaskService;
use App\Services\Task\GetAllTasksService;
use App\Services\Task\GetTaskService;
use App\Services\Task\UpdateTaskService;

class TaskController extends Controller
{
    private readonly CreateTaskService $createTaskService;
    private readonly GetAllTasksService $getAllTasksService;
    private readonly GetTaskService $getTaskService;
    private readonly DeleteTaskService $deleteTaskService;
    private readonly UpdateTaskService $updateTaskService;

    function __construct(
        CreateTaskService $createTaskService,
        GetAllTasksService $getAllTasksService,
        GetTaskService $getTaskService,
        DeleteTaskService $deleteTaskService,
        UpdateTaskService $updateTaskService,
    ) {
        $this->createTaskService = $createTaskService;
        $this->getAllTasksService = $getAllTasksService;
        $this->getTaskService = $getTaskService;
        $this->deleteTaskService = $deleteTaskService;
        $this->updateTaskService = $updateTaskService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $tasks = $this->getAllTasksService->getAllTasks($request);

        return response()->json($tasks, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $task = $this->createTaskService->createTask($request);

        return response()->json($task, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $task = $this->getTaskService->getTask($id);

        return response()->json($task, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $task = $this->updateTaskService->updateTask($request, $id);

        return response()->json($task, 202);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $task = $this->deleteTaskService->deleteTask($id);

        return response()->json(['message' => 'Task Deleted'], 202);
    }
}
