<?php

namespace App\Models\ECOMMERCE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandLine extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity_cl','totalHT','totalTTC'
        ];

public function command()
{
return $this->belongsTo(Command::class);
}

public function product()
{
return $this->belongsTo(Product::class);
}

}
