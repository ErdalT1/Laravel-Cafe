<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function store(Request $request)
    {
        $menuItems = $request->input('menu_items'); // Seçilen menü öğeleri
        $tableNumber = $request->input('table_number'); // Masa numarası

        // Seçilen her menü öğesi için bir sipariş kaydı oluştur
        foreach ($menuItems as $menuItemId) {
            Order::create([
                'menu_item_id' => $menuItemId,
                'table_number' => $tableNumber,
            ]);
        }

        return redirect()->back()->with('success', 'Sipariş kaydedildi!');

    }
    public function adminPanel()
    {
    $orders = Order::with('menuItem')->get();
    $totalOrders = $orders->count();
    $totalRevenue = $orders->sum(function ($order) {
        // menuItems ilişkisinin null olup olmadığını kontrol et
        if ($order->menuItems) {
            return $order->menuItems->sum(function ($menuItem) {
                return $menuItem->price_m ?? $menuItem->price_l;
            });
        }
        return 0; // Eğer ilişki yoksa sıfır döndür
    });

    return view('adminpanel', compact('orders', 'totalOrders', 'totalRevenue'));
    }
}
