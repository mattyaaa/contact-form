<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //フォーム入力ページを呼び出す
    public function index()
    {
        return view('index');
    }

    //送信ボタンクリック時に行われる処理
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }
}
