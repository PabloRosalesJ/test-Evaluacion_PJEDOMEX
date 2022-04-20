<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'tblcompras';

    protected $guarded  = [];
    public $timestamps = false;
}
