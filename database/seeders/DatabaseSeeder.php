<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Storage::deleteDirectory('productos');*/ 
        Storage::makeDirectory('categoria');
        Storage::deleteDirectory('categoria');

        Storage::makeDirectory('subcategoria');
        Storage::deleteDirectory('subcategoria');



        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(SubcategoriaSeeder::class);


    }
}
