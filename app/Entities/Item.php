<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo','descripcion', 'estado'];

    // Accessors
    public function getTipoDescAttribute()
    {
        return config('fdata.tipos.descripciones.' . $this->tipo);
    }
}
