<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::create([
            'title'=>'Welcome Task',
            'description'=>'This is a seeded task. Edit or delete it.',
            'status'=>'todo'
        ]);

        Task::create([
            'title'=>'Example: Fix bug #21',
            'description'=>'Demo task to show in-progress status.',
            'status'=>'in_progress'
        ]);
    }
}
