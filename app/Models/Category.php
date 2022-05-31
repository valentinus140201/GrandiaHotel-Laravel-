<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'type',
        'image'
    ];

    public function scopeFilter($query, array $filters)
    {
        if (request('search')) {
            return $query->where('type', 'like', '%' . request('search') . '%');
        }
    }

    protected function menus()
    {
        return $this->hasMany('App\Menu', 'category_id');
    }

    use HasFactory;
}
