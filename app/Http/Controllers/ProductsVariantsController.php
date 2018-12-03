<?php

namespace App\Http\Controllers;

use App\Models\ProductsVariants;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsVariantsRequest;

class ProductsVariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsvariants = ProductsVariants::with('product', 'size')->get();
        return response()->json($productsvariants, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsVariantsRequest $request)
    {
        $validated = $request->validated();
        ProductsVariants::create([
            'product_id' => $validated['product_id'],
            'size_id' => $validated['size_id'],
        ]);
        return response()->json([
            'message' => 'Успешно добавлено! (я пришел с сервера)',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productsvariant = ProductsVariants::find($id);
        return response()->json($productsvariant, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Order::where('productsvariants_id', $id)->first()) {
            return response()->json([
                'message' => 'Вариант товара номер '.$id.' не получилось удалить. Существует заказ c этим конкретным товаром.',
            ]);
        }
        ProductsVariants::destroy($id);
        return response()->json([
            'message' => 'Вариант товара номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
