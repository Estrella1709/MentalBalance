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
            ['nombre'=>'Ansiedad'],
            ['nombre'=>'Bipolaridad'],
            ['nombre'=>'Depresion'],
            ['nombre'=>'TDAH']
        ]);
    }
}
