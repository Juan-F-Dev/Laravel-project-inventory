<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movement extends Model
{
    public const PAGINATE = 10;
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
