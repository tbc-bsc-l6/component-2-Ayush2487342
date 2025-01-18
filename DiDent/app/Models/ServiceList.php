<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceList extends Model
{
    protected $fillable = ['heading','items','description','logo','status'];
}
