<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonials extends Model
{
    protected $fillable = ['profile','name','description','date','rateing','status'];
}
