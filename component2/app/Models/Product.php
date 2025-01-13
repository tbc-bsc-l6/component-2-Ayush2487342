<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /** @use HasFactory<\Database\Factories\UserFactory> */
     use HasFactory, Notifiable;

}
