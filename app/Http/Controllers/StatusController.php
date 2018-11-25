<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        Status::create([
            'name' => $request['name'],
            'description' => $request['description'],
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
        Status::destroy($id);
        return response()->json(['message' => 'deleted']);
    }
}
