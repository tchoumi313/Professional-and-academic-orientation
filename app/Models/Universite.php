<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description', 'location', 'imagePath', 'pdfFilePath'
    ];

    public function facultes()
    {
        return $this->hasMany(Faculte::class, 'universite_id');
    }
}