<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libros')->insert([
            [
                'Titulo'    => 'Cien Años de Soledad',
                'Editorial' => 'Sudamericana',
                'Autor'     => 'Gabriel García Márquez',
                'Genero'    => 'Novela',
                'Cantidad'  => 10
            ],
            [
                'Titulo'    => 'El Principito',
                'Editorial' => 'Reynal & Hitchcock',
                'Autor'     => 'Antoine de Saint-Exupéry',
                'Genero'    => 'Fábula',
                'Cantidad'  => 8
            ],
            [
                'Titulo'    => 'Don Quijote de la Mancha',
                'Editorial' => 'Francisco de Robles',
                'Autor'     => 'Miguel de Cervantes',
                'Genero'    => 'Novela',
                'Cantidad'  => 5
            ],
            [
                'Titulo'    => 'La Odisea',
                'Editorial' => 'Desconocida',
                'Autor'     => 'Homero',
                'Genero'    => 'Épico',
                'Cantidad'  => 7
            ],
            [
                'Titulo'    => '1984',
                'Editorial' => 'Secker & Warburg',
                'Autor'     => 'George Orwell',
                'Genero'    => 'Distopía',
                'Cantidad'  => 12
            ],
        ]);
    }
}
