<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = ['nombres','apellidos','cedula','email','telefono','ciudad_id'];

    public function ciudad()
    {
        return $this->hasOne('App\Ciudad','id');
    }

}