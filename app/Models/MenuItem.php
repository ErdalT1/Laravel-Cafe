<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price_s', 'price_m', 'price_l', 'image', 'category'];

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_menu_item');
    }
}
