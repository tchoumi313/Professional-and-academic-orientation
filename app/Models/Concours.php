<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concours extends Model
{
    use HasFactory;

    public function universite()
    {
        return $this->hasOne(Universite::class, 'id');
    }
}