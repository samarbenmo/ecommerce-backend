<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_shop','number_products','number_purshases'
        ];

public function profile()
{
return $this->belongsTo(Profile::class);
}

public function product()
{
return $this->belongsTo(Product::class);
}

public function localisation()
{
return $this->hasMany(Localisation::class);
}
}
