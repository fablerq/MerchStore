<?php

namespace App\Http\Controllers;

use App\Http\Requests\FacultyRequest;
use App\Models\Faculty;
use App\Models\Product;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $faculties = Faculty::all();

        return response()->json($faculties, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(FacultyRequest $request)
    {
        $validated = $request->validated();
        Faculty::create([
            'title' => $validated['title'],
        ]);

        return response()->json([
            'message' => 'Факультет успешно добавлен',
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
        $faculty = Faculty::find($id);

        return response()->json($faculty, 200, ['Content-Type' => 'application/json;charset=utf8'], JSON_UNESCAPED_UNICODE);
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
        if (Product::where('faculty_id', $id)->first()) {
            return response()->json([
                'message' => 'Факультет номер '.$id.' не получилось удалить. Существует товар с таким факультетом.',
            ]);
        }
        Faculty::destroy($id);

        return response()->json([
            'message' => 'Факультет номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
