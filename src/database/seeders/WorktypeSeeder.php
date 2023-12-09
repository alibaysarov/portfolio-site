<?php

namespace Database\Seeders;

use App\Models\WorkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorktypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WorkType::insert([
            [
                'title'=>'Веб приложение'
            ],
            [
                'title'=>'Сайт-визитка'
            ],
            [
                'title'=>'Landing page'
            ],
        ]);
    }
}
