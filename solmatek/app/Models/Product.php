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

    /**
     * Ürünün bağlı olduğu kategori.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Bayiye özel fiyatlar.
     */
    public function b2bPrices()
    {
        return $this->hasMany(B2BPrice::class);
    }

    /**
     * Bayi profiline özel fiyatı getirir.
     */
    public function priceForB2B(B2BProfile $profile): ?float
    {
        $price = $this->b2bPrices()->where('b2b_profile_id', $profile->id)->first();
        return $price?->price;
    }
}
