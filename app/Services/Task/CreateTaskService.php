<?php

namespace App\Services\Task;

use App\Models\Task;
use Illuminate\Http\Request;

class CreateTaskService {
    public function createTask(Request $request) {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255']
        ]);

        $task = Task::create($data);

        return $task;
    }
}
