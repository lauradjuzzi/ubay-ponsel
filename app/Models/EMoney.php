<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EMoney extends Model
{
    protected $table = "e_money";
    protected $fillable = ['name', 'service', 'price'];
}
