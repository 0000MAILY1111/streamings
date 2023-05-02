<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colores extends Model
{
    use HasFactory;

    protected $fillable= ['name'];

       //relacion uno a muchos inversa
public function productos(){
    return $this->belongsToMany(productos::class);
}
//relacion muchos a muchos
public function tamaño(){
    return $this->belongsToMany(tamaño::class);
}

}
