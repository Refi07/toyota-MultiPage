<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Item extends Model
{
    protected $fillable = [
        'category_id',
        'supplier_id',
        'code',
        'name',
        'description',
        'price',
        'stock',
        'unit',
        'image'
    ];

    /**
     * Relasi: Setiap item belongs to (milik) satu kategori
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Format harga agar tampil dengan format Rupiah
     */
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->price, 0, ',', '.');
    }
    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}