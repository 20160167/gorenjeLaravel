<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stavkanarudzbine extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['proizvod_id', 'narudzbina_id'];
}
