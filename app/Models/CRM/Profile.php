<?php

namespace App\Models\CRM;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstname','lastname','phone','type'
        ];
        public function user()
        {
        return $this->belongsTo(User::class);
        }

        public function shop()
        {
        return $this->hasOne(Shop::class);
        }
public function produit()
{
return $this->hasMany(Produit::class);
}

public function reaction()
{
return $this->hasMany(Reaction::class);
}

public function socialmedia()
{
return $this->belongsTo(Socialmedia::class);
}

public function command()
{
return $this->hasMany(Command::class);
}
}
