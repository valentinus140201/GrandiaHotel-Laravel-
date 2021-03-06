<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $fillable = [
        'promo_awal',
        'promo_akhir',
        'harga_promo',
    ];
    use HasFactory;
}
