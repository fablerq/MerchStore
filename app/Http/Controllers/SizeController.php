<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
            /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sizes = Size::with('type')->get();
        return response()->json($sizes, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Size::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'type_id' => $request['type_id'],
        ]);

        return (['message' => 'created']);
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
        Size::destroy($id);
        return response()->json(['message' => 'deleted']);
    }
}
