<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $projects = [
            ['id' => 1, 'name' => 'P1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'P2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];
 
        //delete and insert projects
 		DB::table('projects')->delete();
        DB::table('projects')->insert($projects);
 
        $tasks = [
            ['id' => 1, 'name' => 'T1', 'project_id' => 1, 'done' => true, 'description' => 'The 1st task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'T2', 'project_id' => 1, 'done' => false, 'description' => 'The 2nd task', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'T1', 'project_id' => 2, 'done' => false, 'description' => 'Do stuff', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'T2', 'project_id' => 2, 'done' => false, 'description' => 'Do more stuff', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        ];
 
        //delete and insert tasks
        DB::table('tasks')->delete();
        DB::table('tasks')->insert($tasks);
    }
}
