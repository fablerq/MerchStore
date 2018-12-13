<?php

namespace App\Http\Controllers;

use App\Models\ProductsVariants;
use Illuminate\Http\Request;
use App\Http\Requests\ProductsVariantsRequest;
use App\Http\Requests\ProductsVariantsUpdateRequest;

class ProductsVariantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productsvariants = ProductsVariants::with('product', 'size', 'color', 'order')->get();
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
            'color_id' => $validated['color_id'],
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
    public function update(ProductsVariantsUpdateRequest $request, $id)
    {
        $validated = $request->validated();
        $order= ProductsVariants::find($id);
        $order->order_id=$request->get('order_id');
        $order->save();

        return response()->json([
            'message' => 'Конкретный товар '.$id.' успешно добавлен в заказ',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProductsVariants::destroy($id);
        return response()->json([
            'message' => 'Вариант товара номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
