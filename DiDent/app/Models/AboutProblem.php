<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutProblem extends Model
{
    protected $table = 'about_problems';
    protected $fillable = ['heading','descriptoin'];
}
