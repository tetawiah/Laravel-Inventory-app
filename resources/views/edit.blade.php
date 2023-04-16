<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com?plugins=forms"></script>


    <title>Update inventory</title>
</head>

<body>
    <main>

        <div class="flex items-center justify-center w-1/4 mt-9 w-full">
            <form class="border p-5" action="{{route('products.update',['id'=> $product->id])}}" method="post">
                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">Product</label>
                    <input class="border-gray-400 w-full" type="text" name="product" value="{{$product->product_name}}" />
                </div>
                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">Manufacturer</label>
                    <input class="border-gray-400 w-full" type="text" name="manufacturer" value="{{$manufacturer->manufacturer_name }}" />
                </div>
                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">Price</label>
                    <input class="border-gray-400 w-full" type="text" name="price" value="{{$product->price }}" />
                </div>
                <div class="ml-2 mt-4 mb-2">
                    <label class="inline">Stock</label>
                    <input class="border-gray-400 w-full" type="text" name="stock" value="{{$product->stock }}" />
                </div>



                <div>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button class="border bg-gray-800 text-white p-2 rounded-md mt-4 " type="submit">Update</button>
                </div>
                <input type="hidden" name="_method" value="PUT"> </input>
                <input type="hidden" name="id" value="{{ $id }}">
                <!-- <input type="hidden" name="editedby" > -->
            </form>
        </div>



    </main>
</body>

</html>