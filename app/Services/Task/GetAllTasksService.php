<?php

namespace App\Services\Task;

use App\Models\Task;
use Illuminate\Http\Request;

class GetAllTasksService {
    public function getAllTasks(Request $request) {
        $tasks = Task::orderBy('created_at', 'desc');

        if ($request->query('title')) {
            $tasks = $tasks->where('title', 'like', '%' . $request->query('title') . '%');
        }

        if ($request->query('status')) {
            $tasks = $tasks->where('status', '=', $request->query('status'));
        }

        if ($request->query('softDelete')) {
            $tasks = $tasks->withTrashed();
        }

        return $tasks->get();
    }
}
