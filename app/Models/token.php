<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class token extends Model
{
    protected $table = "token";
    protected $fillable = ['Nominal', 'price', 'status'];
}
