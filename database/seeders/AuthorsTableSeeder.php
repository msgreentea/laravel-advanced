<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Author;

class AuthorsTableSeeder extends Seeder
{
    public function run()
    {
        Author::factory()->count(3)->create(); //countの引数でデータを作成する個数が決定される。
    }
}