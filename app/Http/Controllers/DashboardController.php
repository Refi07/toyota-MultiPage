<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalItems = Item::count();
        $totalCategories = Category::count();
        $totalStok = Item::sum('stock');

        $stokPerKategori = Category::withCount('items')
            ->withSum('items', 'stock')
            ->get();

        return view('dashboard', [
            'totalItems' => $totalItems,
            'totalCategories' => $totalCategories,
            'totalStok' => $totalStok,
            'stokPerKategori' => $stokPerKategori,
        ]);
    }
}