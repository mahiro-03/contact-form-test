<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                FashionablyLate
            </a>
            <a class="logout__button" href="/login">/logout</a>
        </div>
    </header>

    <main>
        <div class="admin__content">
            <h2>Admin</h2>
        </div>
        <form action="">
            <div class="search__input">
                <div class="search__input-item">
                    <div class="search__input-title">
                        <input type="text" name="name/email" placeholder="名前やメールアドレスを入力してください">
                    </div>
                    <div class="search__input-title">
                        <select name="detail">
                            <option value="" disabled selected>性別</option>
                            <option value="">男性</option>
                            <option value="">女性</option>
                            <option value="">その他</option>
                        </select>
                    </div>
                    <div class="search__input-title">
                        <select name="detail">
                            <option value="" disabled selected>お問い合わせの種類</option>
                            <option value="">1. 商品のお届けについて</option>
                            <option value="">2. 商品の交換について</option>
                            <option value="">3. 商品トラブル</option>
                            <option value="">4. ショップへのお問い合わせ</option>
                            <option value="">5. その他</option>
                        </select>
                    </div>
                    <div class="search__input-title">
                        <input type="date" name="sale[]">
                    </div>
                    <div class="search__input-title">
                        <button class="search__button-submit" type="submit">検索</button>
                    </div>
                    <div class="search__input-title">
                        <button class="reset__button-submit" type="submit">リセット</button>
                    </div>
                </div>
            </div>
            <div class="export__button">
                <button class="export__button-submit">エクスポート</button>
            </div>
            <div class="input-table">
                <table class="input-table__inner">
                    <tr class="input-table__row">
                        <th class="input-table__header">お名前</th>
                        <th class="input-table__header">性別</th>
                        <th class="input-table__header">メールアドレス</th>
                        <th class="input-table__header">お問い合わせの種類</th>
                        <th class="input-table__header"></th>
                    </tr>
                    <tr class="input-table__row">
                        <td class="input-table__detail">
                            <button class="input-table__detail-button--submit" type="submit">詳細</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </main>
</body>

</html>