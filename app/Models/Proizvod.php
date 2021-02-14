<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['naziv', 'opis', 'slika', 'cena','energetski_razred','boja', 'materijal','dimenzije','vrsta_id'];
}
