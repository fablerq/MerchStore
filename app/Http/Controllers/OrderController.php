<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ProductsVariants;
use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::with('status', 'user', 'paymentmethod')->get();
        return response()->json($orders, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        $validated = $request->validated();
        Order::create([
            'user_id' => $validated['user_id'],
            'status_id' => $validated['status_id'],
            'paymentmethod_id' => $validated['paymentmethod_id'],
        ]);
        return response()->json([
            'message' => 'Успешно добавлено! (я пришел с сервера)',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Order::with('status', 'user', 'paymentmethod')->where('id', '=', $id)->get();
        return response()->json($order);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(order $order)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(ProductsVariants::where('order_id', $id)->first()) {
            return response()->json([
                'message' => 'Заказ номер '.$id.' не получилось удалить. В заказе присутствуют купленные товары.',
            ]);
        }
        Order::destroy($id);
        return response()->json([
            'message' => 'Заказ номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
