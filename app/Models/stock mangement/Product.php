<?php

namespace App\Models\STOCK_MANAGEMENT;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'facebook_post_link','code_prod','current_quantity','title','price','number_purchases'
        ];

public function category()
{
return $this->belongsTo(Category::class);
}

public function shop()
{
return $this->hasMany(Shop::class);
}
public function reaction()
{
return $this->hasOne(Reaction::class);
}

public function commandline()
{
return $this->hasMany(CommandLine::class);
}
}

