<?php

namespace App\Models\STOCK_MANAGEMENT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_categ'
        ];

public function product()
{
return $this->hasMany(Product::class);
}
}
