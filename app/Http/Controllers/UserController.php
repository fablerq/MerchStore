<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Order;
use App\Models\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::with('role')->get();
        return response()->json($users, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserRequest $request)
    {
        $validated = $request->validated();
        User::create([
            'login' => $validated['login'],
            'password' => Hash::make($validated['password']),
            'email' => $validated['email'],
            'role_id' => $validated['role_id'],
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
        $user = User::find($id);
        return response()->json($user, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        if(Order::where('user_id', $id)->first() || Comment::where('user_id', $id)->first()) {
            return response()->json([
                'message' => 'Пользователя номер '.$id.' не получилось удалить. Существует заказ от этого пользователя.',
            ]);
        }
        User::destroy($id);
        return response()->json([
            'message' => 'Юзер номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }

    
}