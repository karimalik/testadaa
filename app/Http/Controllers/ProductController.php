<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * List all data in the DB
     * 
     * @return Response
     */

    public function showAllProducts()
    {
        return response()->json(Product::all());
    }

    /**
     * List one data in the DB
     * 
     * @param $id
     * @return Response
     */
    public function showOneProducts($id)
    {
        return response()->json(Product::find($id));
    }

    /**
     * add data in the DB
     * @param Request $request
     * 
     * @return Response
     */
    public function create(Request $request)
    {
        $products =Product::create($request->all());

        return response()->json($products, 201);
    }

    /**
     * delete data in the DB
     * @param $id
     * 
     * @return Response
     */
    public function delete($id)
    {
        Product::findOrFail($id)->delete();

        return response('Product was delete Successfully', 200);
    }

    /**
     * update data in the DB
     * @param Request $request, $id
     * 
     * @return Response
     */
    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return response()->json($product, 200);
    }

}