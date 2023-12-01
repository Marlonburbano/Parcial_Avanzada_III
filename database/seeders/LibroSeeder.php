<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'ISBN' =>'1111',
                'nombre' =>'Programacion Avanzada',
                'descripcion' =>'Programacion',
                'generoLiterario' =>'Informatica',
                'precioUnitario' =>'100000',
                'observacion' =>'Ninguna',
                'foto' =>'imagen.png',
                'area' =>'01',

            ],
            [
                'ISBN' =>'1112',
                'nombre' =>'Inteligencia Artificial',
                'descripcion' =>'IA',
                'generoLiterario' =>'Informatica',
                'precioUnitario' =>'15000',
                'observacion' =>'Ninguna',
                'foto' =>'imagen2.png',
                'area' =>'02',
            ],
            [
                'ISBN' =>'1113',
                'nombre' =>'Robotica II',
                'descripcion' =>'Robotica',
                'generoLiterario' =>'Electronica',
                'precioUnitario' =>'80000',
                'observacion' =>'Ninguna',
                'foto' =>'imagen3.png',
                'area' =>'03',
            ],
            [
                'ISBN' =>'1114',
                'nombre' =>'Denis Zill ',
                'descripcion' =>'Calculo',
                'generoLiterario' =>'Matematicas',
                'precioUnitario' =>'70000',
                'observacion' =>'Ninguna',
                'foto' =>'imagen4.png',
                'area' =>'04',
            ],
            [
                'ISBN' =>'1115',
                'nombre' =>'Redes ',
                'descripcion' =>'Telematica',
                'generoLiterario' =>'Informatica',
                'precioUnitario' =>'50000',
                'observacion' =>'Ninguna',
                'foto' =>'imagen5.png',
                'area' =>'05',
            ]
        ];
        DB::table('libro')->insert($datos);
    }
}
