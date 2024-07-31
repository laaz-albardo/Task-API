<?php

namespace App\Services\Task;

use App\Services\Task\GetTaskService;

class DeleteTaskService {
    private readonly GetTaskService $getTaskService;

    function __construct(GetTaskService $getTaskService) {
        $this->getTaskService = $getTaskService;
    }

    public function deleteTask(int $id) {
        $task = $this->getTaskService->getTask($id);

        return $task->delete();
    }
}