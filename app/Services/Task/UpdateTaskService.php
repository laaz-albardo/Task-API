<?php

namespace App\Services\Task;

use Illuminate\Http\Request;

class UpdateTaskService {
    private readonly GetTaskService $getTaskService;

    function __construct(GetTaskService $getTaskService) {
        $this->getTaskService = $getTaskService;
    }

    public function updateTask(Request $request, int $id) {
        $data = $request->validate([
            'title' => ['string', 'max:100'],
            'description' => ['string', 'max:255'],
            'status' => ['boolean'],
        ]);

        $task = $this->getTaskService->getTask($id);

        $task->update($data);

        $task = $this->getTaskService->getTask($id);

        return $task;
    }
}
