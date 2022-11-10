<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compagnie extends Model
{
    use HasFactory;
    protected $stable= "compagnies";
    protected $fillable = [
            'compagnie',
            'adresse',
            'email',
            'telephone',
            'nom',
            'prennom',
            'img',
    ];
}
