<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pulsa extends Model
{
    protected $table = "pulsas";
    protected $fillable = ['name', 'service', 'price', 'status'];
}
