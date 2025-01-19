<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecentNews extends Model
{
    protected $fillable = ['image','heading', 'date', 'description', 'status'];
}
