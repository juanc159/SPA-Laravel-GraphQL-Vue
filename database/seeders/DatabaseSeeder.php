<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Project;
use App\Models\Task;
use App\Models\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('project_user')->truncate();
        Project::truncate();
        Task::truncate();
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $admin = User::create([
            'name' => 'Super Admin',
            'email' => 'superadmin@projectmanager.local',
            'password' => bcrypt('secret')
        ]);
        $user = User::create([
            'name' => 'Juan carlos',
            'email' => 'jcmg.ing@projectmanager.local',
            'password' => bcrypt('secret')
        ]);

        $project = Project::create([
            'title' => 'Create Project manager App',
            'description' => 'Write a Project manager',
            'manager_id' => $admin->id
        ]);

        $task1 = Task::create([
            'title' => 'Seed Database',
            'description' => 'Seed the database whit test data',
            'status_code' => 'COMP',
            'project_id' => $project->id,
            'user_id' => $admin->id

        ]);
        $task2 = Task::create([
            'title' => 'Complete Develoment',
            'description' => 'Write all  the code',
            'status_code' => 'OPEN',
            'project_id' => $project->id,
            'user_id' => $user->id

        ]);
        
        $project->users()->saveMany([$admin,$user]);
    }
}
