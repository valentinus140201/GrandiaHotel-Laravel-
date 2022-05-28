<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'harga',
        'promo_awal',
        'promo_akhir',
        'harga_promo',
        'category'
    ];

    protected function Order()
    {
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
