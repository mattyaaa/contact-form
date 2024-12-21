<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Contactモデルの追加
use App\Models\Contact;
//ContactRequestの追加
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //フォーム入力ページを呼び出す
    public function index()
    {
        return view('index');
    }

    //フォーム入力ページ送信ボタンクリック時に行われる処理
    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', compact('contact'));
    }

    //入力内容確認ページの送信ボタンクリック時に行われる処理
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name', 'email', 'tel', 'content']);
        //保存処理
        Contact::create($contact);
        //viewの呼び出し
        return view('thanks');
    }
}
