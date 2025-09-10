<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                FashionablyLate
            </a>
        </div>
    </header>

    <main>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>Confirm</h2>
            </div>
            <!-- 送信用フォーム -->
            <form class="form" action="/contacts/admin" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
                                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="text" name="email" value="{{ $contact['email'] }}" readonly>
                                <input type="hidden" name="email" value="{{ $contact['email'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            @php
                            $telCombined = isset($contact['tel']) ? implode('', $contact['tel']) : '';
                            @endphp
                            <td class="confirm-table__text">
                                <input type="text" name="tel" value="{{ $telCombined }}" readonly>
                                <input type="hidden" name="tel" value="{{ implode('', $contact['tel']) }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                                <input type="hidden" name="address" value="{{ $contact['address'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                                <input type="hidden" name="building" value="{{ $contact['building'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="content" value="{{ $contact['content'] }}" readonly>
                                <input type="hidden" name="content" value="{{ $contact['content'] }}">
                            </td>
                        </tr>
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
                                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                            </td>
                        </tr>
                    </table>
                    <div class="form__button">
                        <button class="form__button-submit" type="submit">送信</button>
                    </div>
                </div>
            </form>
            <!-- 修正用フォーム -->
            <form class="form" action="{{ route('contacts.edit') }}" method="get">
                {{-- 各入力項目を hidden で送信 --}}
                <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                <input type="hidden" name="email" value="{{ $contact['email'] }}">
                <input type="hidden" name="tel[0]" value="{{ $contact['tel'][0] }}">
                <input type="hidden" name="tel[1]" value="{{ $contact['tel'][1] }}">
                <input type="hidden" name="tel[2]" value="{{ $contact['tel'][2] }}">
                <input type="hidden" name="address" value="{{ $contact['address'] }}">
                <input type="hidden" name="building" value="{{ $contact['building'] }}">
                <input type="hidden" name="content" value="{{ $contact['content'] }}">
                <input type="hidden" name="detail" value="{{ $contact['detail'] }}">

                <button class="correction__logo" type="submit">修正</button>
            </form>
        </div>
    </main>
</body>

</html>