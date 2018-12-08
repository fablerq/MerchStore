<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Requests\StatusRequest;

class StatusController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $statuses = Status::all();
        return response()->json($statuses, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StatusRequest $request)
    {
        $validated = $request->validated();
        Status::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
        ]);
        return response()->json([
            'message' => 'Успешно добавлено! (я пришел с сервера)',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $status = Status::find($id);
        return response()->json($status, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(Order::where('status_id', $id)->first()) {
            return response()->json([
                'message' => 'Статус номер '.$id.' не получилось удалить. Существует заказ c таким статусом.',
            ]);
        }
        Status::destroy($id);
        return response()->json([
            'message' => 'Статус номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}