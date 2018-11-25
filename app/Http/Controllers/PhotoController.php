<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
                /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $photos = Photo::with('product')->get();
        return response()->json($photos, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        Photo::create([
            'photo_link' => $request['photo_link'],
            'product_id' => $request['product_id'],
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
        $photo = Photo::find($id);
        return response()->json($photo, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Photo::destroy($id);
        return response()->json(['message' => 'deleted']);
    }
}
