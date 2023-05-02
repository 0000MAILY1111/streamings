<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
    use HasFactory;

    protected $guraded = ['url','imagenes_id','imagenes_tipo' ];

    public function imagenes(){
        return $this->morphTo(imagenes::class);
    }

   
}
