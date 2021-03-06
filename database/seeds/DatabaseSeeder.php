<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('tasks')->truncate();

        $this->call(UsersTableSeeder::class);
        $this->call(TasksTableSeeder::class);
    }
}
