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

    public function scopeFilter($query, array $filters)
    {

        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });
    }

    use HasFactory;
}
