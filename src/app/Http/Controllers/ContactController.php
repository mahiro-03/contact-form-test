<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //index.blade.phpを表示させるための準備
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
        // dd($contact['content']);
        //以下はviewファイルのconfirmに変数$contactを contact というキーで渡す処理
        return view('confirm', compact('contact'));
    }

    //confirm.blade.php の formタグから送信された値を受け取るように、storeアクションの記述を修正
    public function store(ContactRequest $request)
    {
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tel', 'address', 'building', 'content', 'detail']);
    }

    //contactページに戻り、編集(修正)する処理
    //route('contacts.index')はルート定義時につけた名前のこと。web.phpのname('contacts.index')とつけられたルートのことを表している。
    public function edit()
    {
        //withInput() で old() に入力を保持したまま戻る
        return redirect()->route('contacts.index')->withInput();
    }
}
