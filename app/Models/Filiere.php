<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'description',  'imagePath', 'pdfFilePath'
    ];
    /*   public function filieres()
    {
        return $this->hasMany(Filiere::class, "id");
    } */
}