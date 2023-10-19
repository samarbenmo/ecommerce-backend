<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localisation extends Model
{
    use HasFactory;
    protected $fillable = [
        'country','city','zip_code','id_shop'
        ];

public function shop()
{
return $this->belongsTo(Shop::class);
}

}
