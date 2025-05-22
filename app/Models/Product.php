<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'code',
        'name',
        'ammount',
        'unit',
        'price',
    ];

    public const PAGINATE = 10;
    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class);
    }
}
