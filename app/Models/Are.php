<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Are extends Model
{
    protected $table = 'areaconocimiento';
    protected $primaryKey = 'idArea';
    public $timestamps = 'true';
}
