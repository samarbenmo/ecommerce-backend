<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_react','content'
        ];
        public function product()
        {
        return $this->belongsTo(Product::class);
        }

        public function profile()
{
return $this->belongsTo(Profile::class);
}
}
