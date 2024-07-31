<?php

namespace App\Services\Task;

use App\Models\Task;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GetTaskService {
    public function getTask(int $id) {
        $task = Task::find($id);

        if (!$task) {
            throw new NotFoundHttpException('Task not found');
        }

        return $task;
    }
}
