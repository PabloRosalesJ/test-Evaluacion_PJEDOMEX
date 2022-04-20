<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
    protected $table = 'tblarticulos';
    public $timestamps = false;
    protected $primaryKey = 'idArticulo';

    protected $guarded = [];
}
