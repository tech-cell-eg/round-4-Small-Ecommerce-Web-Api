<?php

namespace App\Traits\ApiResponse;

namespace App\Http\Controllers\api;


use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::where('category_id', $request->category_id)->get();

        if ($products) {
            return ApiResponse::sendResponse(ProductResource::collection($products), 'Products retrieved successfully.');
        }
        return ApiResponse::sendResponse([], 'Products not found.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::where('id', $id)->first();
        if ($product) {
            return ApiResponse::sendResponse(new ProductResource($product), 'Product retrieved successfully.');
        }
        return ApiResponse::sendResponse([], 'Product not found.');
    }


    public function store(Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
