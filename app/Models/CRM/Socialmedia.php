<?php

namespace App\Models\CRM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socialmedia extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_sm','link'
        ];

public function profile()
{
return $this->hasOne(Profile::class);
}
}
