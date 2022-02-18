<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';

    /*
     * @relationship belongsTo
     */

    public function ProductType(): BelongsTo
    {
        return  $this->belongsTo(ProductType::class);
    }
}
