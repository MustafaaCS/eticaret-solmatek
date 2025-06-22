<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Bayi (B2B) profili modeli.
 */
class B2BProfile extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Tablo adı model ismi ile uyuşmadığından manuel tanımlıyoruz.
     */
    protected $table = 'b2b_profiles';

    protected $fillable = [
        'user_id',
        'company_name',
        'tax_number',
        'address',
        'show_prices',
        'status',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function prices()
    {
        return $this->hasMany(B2BPrice::class);
    }
}
