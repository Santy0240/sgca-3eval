<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pruebasdeconduccion extends Model
{
    use HasFactory;
    protected $table ='tb_pruebasdeconduccion';
    protected $primarykey ='id_prueba';
    public $timestamps = false;
}
