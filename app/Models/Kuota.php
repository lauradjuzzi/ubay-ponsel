<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kuota extends Model
{
    protected $table = "kuotas";
    protected $fillable = ['name', 'service', 'price'];
}
