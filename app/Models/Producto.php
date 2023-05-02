<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $guraded = ['id','created_at','updated_at' ];

    public function tamaño(){
        return $this->hasMany(tamaño::class);
    }

//relacion uno a muchos inversa
public function marca(){
    return $this->belongsTo(marca::class);
}
public function subcategoria(){
    return $this->belongsTo(subcategoria::class);
}
//relacion muchos a muchos
public function colores(){
    return $this->hasMany(Colores::class);
}
//relacion muchos a poli
public function imagenes(){
    return $this->morphMany(imagenes::class, 'imagenes');
}



}
