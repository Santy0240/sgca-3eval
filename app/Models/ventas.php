<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;
    protected $table ='tb_ventas';
    protected $primarykey ='id_venta';
    public $timestamps = false;
}
