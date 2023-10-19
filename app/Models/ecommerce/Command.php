<?php

namespace App\Models\ECOMMERCE;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Command extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_comm','method_payment','shipping','price_shipping'
        ];
        public function commandline()
        {
        return $this->hasMany(CommandLine::class);
        }

        public function profile()
        {
        return $this->belongsTo(Profile::class);
        }
}
