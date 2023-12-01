<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AreaConocimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'idArea' =>'01',
                'descripcionarea' =>'Programacion',
            ],
            [
                'idArea' =>'02',
                'descripcionarea' =>'IA',
            ],
            [
                'idArea' =>'03',
                'descripcionarea' =>'Robotica',
            ],
            [
                'idArea' =>'04',
                'descripcionarea' =>'Calculo',
            ],
            [
                'idArea' =>'05',
                'descripcionarea' =>'Telematica',
            ]
        ];
        DB::table('AreaConocimiento')->insert($datos);
    }
}
