<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['brand_id', 'category_id', 'sku', 'name', 'slug', 'description', 'price', 'stock', 'attributes'];
    protected $casts = ['attributes' => 'array', 'price' => 'decimal:2',];
    public function brand():BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    //
}
