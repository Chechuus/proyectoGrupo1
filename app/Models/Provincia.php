<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{

    protected $table = 'provincias';

    protected $primaryKey = 'id';

    protected $connection = 'mysql';

    protected $fillable = [
        'nombre'
    ];
}
