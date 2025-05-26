<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    public const MOVEMENT_TYPE_SALE = 'sale';
    public const MOVEMENT_TYPE_RESTOCK = 'restock';
    public const MOVEMENT_TYPE_RETURN = 'return';
    public const PAGINATE = 10;
    public $fillable = [
        'type',
        'ammount',
        'sale_point',
        'product_id'

    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
