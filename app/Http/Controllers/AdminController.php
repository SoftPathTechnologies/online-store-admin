<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.admin.dashboard');
    }

    public function products()
    {
        $producs = Products::all();
        return view('dashboard.admin.products', ['products' => $producs]);
    }
}
