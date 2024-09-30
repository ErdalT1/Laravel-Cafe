<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['menu_item_id', 'table_number'];

    public function menuItem()
    {
        return $this->belongsToMany(MenuItem::class, 'order_menu_item');
    }
}
