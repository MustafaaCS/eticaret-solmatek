<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Kategori modelimiz. Ürünlerle ilişkili olacak ve yönetim panelinde
 * kullanılacak. HasFactory trait'i ile factory kullanımı mümkün hale gelir.
 */
class Category extends Model
{
    use HasFactory;

    /**
     * Toplu atama yapılabilecek alanlar.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'ordering',
        'active',
    ];

    /**
     * Bir kategorinin birden fazla ürünü vardır.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
