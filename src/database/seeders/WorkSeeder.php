<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            Work::insert([
                'title'=>'value1',
                'sub_title'=>'value2',
                'text'=>'value3',
                'img_url'=>'value4',
                'url'=>'value5',
                'user_id'=>1,
                'worktypes_id' =>3
            ]);
        }
    }
}
