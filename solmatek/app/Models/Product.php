<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Ürün modelimiz. Kategori ile ilişkilidir ve admin panelinden yönetilecektir.
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'title',
        'slug',
        'description',
        'price',
        'stock',
        'image',
        'tags',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
