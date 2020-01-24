<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $fillable = ['Nome'];
    protected $table = 'professores';
}
