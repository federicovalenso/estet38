<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductSearchController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $search_string = "";
        $products = [];
        if ($request->has('query')) {
            $search_string = $request->only('query')['query'];
            $products = Product::search($search_string)->paginate();
        }
        return view(
            'search',
            ['products' => $products]
        );
    }
}
