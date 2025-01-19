<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HospitalInfo extends Model
{
    protected $table = 'hospital_infos';
    protected $fillable = ['phone', 'email', 'location','status'];
}
