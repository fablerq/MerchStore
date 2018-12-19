<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotoRequest;
use App\Models\Photo;

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

        return response()->json($photos, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PhotoRequest $request)
    {
        $validated = $request->validated();

        $image = $request->get('image');
        $name = time().'.'.explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
        \Image::make($request->get('image'))->fit(300, 400)->save(public_path('images/upload/').$name);

        Photo::create([
            'title'      => $validated['title'],
            'image'      => $name,
            'product_id' => $validated['product_id'],
        ]);

        return response()->json([
            'message' => 'Фотография успешно добавлена',
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
        $photo = Photo::with('product')->where('id', '=', $id)->get();

        return response()->json($photo, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
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
        Photo::destroy($id);

        return response()->json([
            'message' => 'Фотография номер '.$id.' удалена успешно (я пришел с сервера)',
        ]);
    }
}
