<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Contactモデルの追加
use App\Models\Contact;

class ContactController extends Controller
{
    //フォーム入力ページを呼び出す
    public function index()
    {
        return view('index');
    }

    //フォーム入力ページ送信ボタンクリック時に行われる処理
    public function confirm(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    //入力内容確認ページの送信ボタンクリック時に行われる処理
    public function store(Request $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
    }
}
