<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /*
     * @relationship belongsTo
     */
    public function ProductType(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return  $this->belongsTo(ProductType::class);
    }
}
