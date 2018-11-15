<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\ProductCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProduct;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'admin.products.index',
            ['products' => Product::paginate()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'admin.products.create',
            ['categories' => ProductCategory::all()]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        $validated = $request->validated();
        $image_path = $this->uploadImage($request);
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $product->image = $image_path;
        $product->save();
        return redirect()->to($request->only('redirects_to')['redirects_to']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view(
            'admin.products.edit',
            [
                'product' => $product,
                'categories' => ProductCategory::all()
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, Product $product)
    {
        $validated = $request->validated();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category_id = $request->category;
        $product->price = $request->price;
        $image_path = $this->uploadImage($request);
        if (!(empty($image_path))) {
            $product->image = $image_path;
        }
        $product->save();
        return redirect()->to($request->only('redirects_to')['redirects_to']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    /**
     * Upload image from request
     *
     * @param  \App\Http\Requests\StoreProduct  $request
     * @return  string $result
     */
    private function uploadImage(StoreProduct $request)
    {
        $result = "";
        if ($request->hasFile('image')) {
            if ($request->file('image')->isValid()) {
                $result = $request->file('image')->store('uploads', 'public');
            }
        }
        return $result;
    }
}
