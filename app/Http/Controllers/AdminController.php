<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuItem; // MenuItem modelini dahil edin
use App\Models\Order; // Order modelini dahil edin

class AdminController extends Controller
{
    public function index()
    {
        // // Veritabanındaki tüm siparişleri ve ürünleri alalım
        // $orders = Order::with('menuItems')->get();

        // return view('adminpanel', compact('orders'));

        return view('adminpanel');
    }
}
