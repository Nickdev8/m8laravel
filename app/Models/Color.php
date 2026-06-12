<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [
        'name',
    ];

    public function tshirts()
    {
        return $this->hasMany(Tshirt::class);
    }
}