<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function viewAll() {
        return view('index',
        ['products' => Product::all()]
    );
    
    }
}
