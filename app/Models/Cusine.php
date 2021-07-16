<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cusine extends Model
{
    use HasFactory;
    protected $fillable = ['name_e', 'name_a','status'];
    
}
