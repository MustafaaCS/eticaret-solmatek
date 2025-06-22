<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Ürün bazında bayi özel fiyatı modeli.
 */
class B2BPrice extends Model
{
    use HasFactory;

    /**
     * Model ismine göre varsayılan tablo adı `b2_b_prices` olacağından
     * doğru tablo adını belirtiriz.
     */
    protected $table = 'b2b_prices';

    protected $fillable = [
        'b2b_profile_id',
        'product_id',
        'price',
    ];

    public function profile()
    {
        return $this->belongsTo(B2BProfile::class, 'b2b_profile_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
