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

    protected function menus()
    {
        return $this->hasMany('App\Menu', 'category_id');
    }

    use HasFactory;
}
