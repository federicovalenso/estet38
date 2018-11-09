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
        $search_string = $request->only('search-string')['search-string'];
        return view(
            'search',
            ['products' => Product::search($search_string)->paginate()]
        );
    }
}
