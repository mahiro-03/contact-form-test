<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // フォームなどからユーザーが入力する複数のカラムがある。これらを Contact::create($request->all()) のような方法で一括登録するには、Eloquent に「この項目たちは保存していいよ」と教えておく必要があります。
    // それが $fillable という指定です。
    //必要に応じて追加
    protected $fillable = [
        //使うカラムを全てここに
        'last_name',
        'first_name',
        'gender',
        'email',
        'tel.*',
        'address',
        'content',
        'detail',
    ];

    //リレーション(例: Contact は Category に属している)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // public function getGenderLabelAttribute()
    // {
    //     return match ($this->gender) {
    //         'male' => '男性',
    //         'female' => '女性',
    //         'other' => 'その他',
    //     };
    // }
}
