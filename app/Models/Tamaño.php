<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamaño extends Model
{
    use HasFactory;

    protected $fillable= ['name','producto_id'];

    //relacion uno a muchos inversa
public function productos(){
    return $this->belongsTo(productos::class);
}
//relacion muchos a muchos
public function colores(){
    return $this->belongsToMany(colores::class);
}
}
