<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Http\Requests\FAQRequestAsk;
use App\Http\Requests\FAQRequestReply;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = FAQ::with('user')->get();
        return response()->json($faqs, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FAQRequestAsk $request)
    {
        $validated = $request->validated();
        if (!$validated['askername'])
        {
            $validated['askername'] = 'Страждующий';
        }
        FAQ::create([
            'askername' => $validated['askername'],
            'email' => $validated['email'],
            'question' => $validated['question'],
        ]);
        return response()->json([
            'message' => 'Вопрос в фак успешно добавлен. Ждите ответа.',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faq = FAQ::with('user')->where('id', '=', $id)->get();
        return response()->json($faq, 200, array('Content-Type' => 'application/json;charset=utf8'), JSON_UNESCAPED_UNICODE);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $fAQ)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(FAQRequestReply $request, $id)
    {
        $validated = $request->validated();
        $reply= FAQ::find($id);
        $reply->user_id=$request->get('user_id');
        $reply->answer=$request->get('answer');
        $reply->save();

        return response()->json([
            'message' => 'Ответ успешно добавлен',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FAQ::destroy($id);
        return response()->json([
            'message' => 'Вопрос к факу номер '.$id.' удален успешно (я пришел с сервера)',
        ]);
    }
}
