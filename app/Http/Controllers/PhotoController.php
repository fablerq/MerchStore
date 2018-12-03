<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use App\Http\Requests\PhotoRequest;

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
    public function store(PhotoRequest $request)
    {
        $validated = $request->validated();
        Photo::create([
            'title' => $validated['title'],
            'photo_link' => $validated['photo_link'],
            'product_id' => $validated['product_id'],
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
        return response()->json([
            'message' => 'Фотография номер '.$id.' удалена успешно (я пришел с сервера)',
        ]);
    }
}
