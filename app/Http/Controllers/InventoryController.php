<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        return view(
            'index',
            ['products' => Product::all()]
        );
    }


    public function store(Request $request)
    {
        // User::create([
        //     'name' => 'Dummy Email',
        //     'email' => 'example@example.com',
        //     'password' => bcrypt('password'),

        // ]);

        $manufacturer = Manufacturer::create([
            'manufacturer_name' => $request->manufacturer,
        ]);


        Product::create([
            'product_name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
            'manufacturer_id' => $manufacturer->id,
            'user_id' => 1,
        ]);

    }

    public function delete($id) {
        Product::where('id',$id)->delete();
    }
}
