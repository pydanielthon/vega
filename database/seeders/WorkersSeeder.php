<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class WorkersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workers')->insert([
            'name' => Str::random(10),
            'surname' => Str::random(10),
            'price' => rand(70, 200),
            'salary' => rand(5000, 120000),
            'address' => Str::random(10),
            'notes' => Str::random(10),
        ]);
    }
}
