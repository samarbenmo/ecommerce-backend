<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lignedecommande extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity','totalHT','totalTTC'
        ];

}
