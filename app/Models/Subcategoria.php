<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    use HasFactory;

    protected $guraded = ['id','created_at','updated_at' ];

    //relacion uno a muchos
    public function productos(){
        return $this->hasMany(productos::class);

    }
  //relacion uno a muchos inversa
  public function categoria(){
    return $this->belongsToMany(productos::class);

}
}
