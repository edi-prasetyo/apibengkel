<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth:api', ['except' => ['login']]);
    // }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Products = Product::all();
        if ($Products) {
            return response()->json([
                'products' => $Products,
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
