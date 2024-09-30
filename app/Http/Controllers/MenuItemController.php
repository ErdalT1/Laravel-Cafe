<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use Illuminate\Http\Request;

class MenuItemController extends Controller
{
    public function index() {
        $menuItems = MenuItem::all();
        return view('intro', compact('menuItems'));
    }
}
