<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recintos extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'recintos';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'COD_RECINTO';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'DESCRIPCION',
                  'DIRECCION',
                  'COD_MUNICIPIO',
                  'COD_CIUDAD',
                  'COD_SECTOR',
                  'COD_CIRCUNSCRIPCION'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    



}
