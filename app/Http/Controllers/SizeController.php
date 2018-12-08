<?php

namespace App\Http\Controllers;

use App\Models\Size;
use App\Models\ProductsVariants;
use Illuminate\Http\Request;
use App\Http\Requests\SizeRequest;

class SizeController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sizes = Size::all();
        return response()->json($sizes, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SizeRequest $request)
    {
        $validated = $request->validated();
        Size::create([
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
        $size = Size::find($id);
        return response()->json($size, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(ProductsVariants::where('size_id', $id)->first()) {
            return response()->json([
                'message' => 'Размер номер '.$id.' не получилось удалить. Существует конкретный товар с таким размером.',
            ]);
        }
        Size::destroy($id);
        return response()->json([
            'message' => 'Размер номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
