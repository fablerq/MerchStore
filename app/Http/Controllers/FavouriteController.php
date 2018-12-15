<?php

namespace App\Http\Controllers;
use App\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\FavouriteRequest;

class FavouriteController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //$favourites = User::all()->products()->all();
        // $favourites = User::find(2)->products()->get();
        // return response()->json($favourites, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $favourite = User::find($id)->products()->get();
        return response()->json($favourite, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }


     /**
     * Add favourite product in storage.
     *
     * @return Response
     */
    public function store(FavouriteRequest $request)
    {
        $validated = $request->validated();

        $userid = $validated['user_id'];
        $productid = $validated['product_id'];

        User::find($userid)->products()->syncWithoutDetaching($productid);

        return response()->json([
            'message' => 'Успешно добавлено в избранные!',
        ]);
    }

        /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function delfavourite($userid, $productid)
    {
        User::find($userid)->products()->detach($productid);
        return response()->json([
            'message' => 'Успешно удалено из избранных',
        ]);
    }
}
