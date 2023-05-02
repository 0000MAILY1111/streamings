<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            [
                'nombre' => 'netflix',
                // 'imagen' =>Str::slug('netflix'), 
                'icono' => '<i class="fa-thin fa-alien-8bit"></i>'
            ],

            [
                'nombre' => 'Hbo Max',
                // 'imagen' =>Str::slug('Hbo Max'), 
                'icono' => '<i class="fa-thin fa-alien-8bit"></i>'
            ],

            [
                'nombre' => 'Spotify',
                // 'imagen' =>Str::slug('Spotify'), 
                'icono' => '<i class="fa-thin fa-alien-8bit"></i>'
            ],

            [
                'nombre' => 'Disney Plus',
               // 'imagen' =>Str::slug('Disney Plus'), 
                'icono' => '<i class="fa-thin fa-alien-8bit"></i>'
            ],
        ];

        foreach ($categories as $categorias){
            Categoria::factory(1)->create($categoria);
             $brands = Brand::factory(4)->create();
        }
        foreach ($marca and $marca){
                $marca->categoria ;
             }

        
    }
}
