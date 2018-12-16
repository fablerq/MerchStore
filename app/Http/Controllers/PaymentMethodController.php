<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentMethodRequest;
use App\Models\Order;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paymentmethods = PaymentMethod::all();

        return response()->json($paymentmethods, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
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
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(PaymentMethodRequest $request)
    {
        $validated = $request->validated();
        PaymentMethod::create([
            'title' => $validated['title'],
        ]);

        return response()->json([
            'message' => 'Успешно добавлено! (я пришел с сервера)',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\PaymentMethod $paymentMethod
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paymentmethod = PaymentMethod::find($id);

        return response()->json($paymentmethod, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\PaymentMethod $paymentMethod
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\PaymentMethod       $paymentMethod
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaymentMethod $paymentMethod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\PaymentMethod $paymentMethod
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Order::where('paymentmethod_id', $id)->first()) {
            return response()->json([
                'message' => 'Метод платежа номер '.$id.' не получилось удалить. Существует заказ c таким методом платежа.',
            ]);
        }
        PaymentMethod::destroy($id);

        return response()->json([
            'message' => 'Метод платежа номер '.$id.' удалена успешно (я пришел с сервера)',
        ]);
    }
}
