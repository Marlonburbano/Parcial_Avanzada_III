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
                'descripcion' =>'Programacion',
            ],
            [
                'idArea' =>'02',
                'descripcion' =>'IA',
            ],
            [
                'idArea' =>'03',
                'descripcion' =>'Robotica',
            ],
            [
                'idArea' =>'04',
                'descripcion' =>'Calculo',
            ],
            [
                'idArea' =>'05',
                'descripcion' =>'Telematica',
            ]
        ];
        DB::table('AreaConocimiento')->insert($datos);
    }
}
