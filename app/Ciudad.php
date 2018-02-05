<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
    protected $primaryKey = "id";
    protected $fillable = ['nombre'];

    public function cliente()
    {
         return $this->belongsTo('App\Cliente','id');
    }

}
