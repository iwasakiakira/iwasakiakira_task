<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('tasks')->insert(
        // [
        //     'id' => '1' ,
        //     'title' => 'タスク1' ,
        //     'body' => 'これはタスク1だよ'
        // ]
        // );

        $param = [[
            'id' => '2',
            'title' => 'タスク2',
            'body' => 'これはタスク2だよ'
        ],
        [
            'id' => '3',
            'title' => 'タスク3',
            'body' => 'これはタスク3だよ'
        ]];
        DB::table('tasks')->insert($param);
    }
}
