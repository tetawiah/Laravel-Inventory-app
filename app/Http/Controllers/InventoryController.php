<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Product;
use App\Models\Manufacturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index()
    {
        return view(
            'index',
            ['products' => Product::all()]
        );
    }

    public function updateView($id)
    {
        $product = Product::find($id);

        return view(
            'edit',
            [
                'product' => $product,
                'manufacturer' => $product->manufacturer,
                'id' => $id,
            ]
        );
    }

    public function update(Request $request, $id)
    {
        Product::find($id)->update(
            [
                'product_name' => $request->product,
                'manufacturer' => $request->manufacturer,
                'price' => $request->price,
                'stock' => $request->stock,
                'editedby' => Auth::user()->email,
            ]
        );

        return $this->redirectHome();
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

        return $this->redirectHome();
    }

    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return $this->redirectHome();
    }

    private function redirectHome()
    {
        return redirect('/');
    }
}
