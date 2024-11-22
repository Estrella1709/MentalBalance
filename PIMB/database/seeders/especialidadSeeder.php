<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class especialidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('especialidades')->insert([
            ['tipo'=>'ansiedad'],
            ['tipo'=>'bipolaridad'],
            ['tipo'=>'depresion'],
            ['tipo'=>'tdah']
        ]);
    }
}
