<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','imagen'.'icono'];
///relacion uno a muchos

    public function subcategoria(){
        return $this->hasMany(subcategoria::class);

    }

    ///relacion muchos a muchos 
    public function marca(){
        return $this->belongsToMany(marca::class);
    }
    public function productos(){
        return $this->hasManyThrough(productos::class, subcategoria::class);  
    }
}
