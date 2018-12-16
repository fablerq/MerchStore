<?php

namespace App\Http\Controllers;

use App\Http\Requests\TypeRequest;
use App\Models\Product;
use App\Models\Type;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $types = Type::all();

        return response()->json($types, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(TypeRequest $request)
    {
        $validated = $request->validated();
        Type::create([
            'title' => $validated['title'],
        ]);

        return response()->json([
            'message' => 'Успешно добавлено! (я пришел с сервера)',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $type = Type::find($id);

        return response()->json($type, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        if (Product::where('type_id', $id)->first()) {
            return response()->json([
                'message' => 'Тип товара номер '.$id.' не получилось удалить. Существует товар с таким типом.',
            ]);
        }
        Type::destroy($id);

        return response()->json([
            'message' => 'Тип номер '.$id.' удалена успешно (я пришел с сервера)',
        ]);
    }
}
