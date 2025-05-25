<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{

    use HasFactory;
    public const PAGINATE = 5;

    protected $fillable = [
        'code',
        'name',
        'ammount',
        'unit',
        'price',
    ];

    // create factory to 100 products



    public function movements(): HasMany
    {
        return $this->hasMany(Movement::class);
    }
}
