<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class enfermedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('enfermedades')->insert([
            ['nombre'=>'ansiedad'],
            ['nombre'=>'bipolaridad'],
            ['nombre'=>'depresion'],
            ['nombre'=>'tdah']
        ]);
    }
}
