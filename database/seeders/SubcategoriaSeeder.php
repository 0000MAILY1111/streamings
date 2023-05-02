<?php

namespace Database\Seeders;

use App\Models\Subcategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *   @return void 
     */


    public function run()
    {
        $subcategories = [
        
            [
                'categoria_id'=>1,
                'name'=>'premium',
                'slug'=> Str::slug('$title'),
                'color'=> true 
            ],
            [
                'categoria_id'=>2,
                'name'=>'standar',
                'slug'=> Str::slug('$title'),
                'color'=> true 
            ],

        ];
        foreach ($subcategories as $key => $subcategoria ) {   /** */
                Subcategoria::factory(1)->create($subcategoria);
                
        }

    }
}
