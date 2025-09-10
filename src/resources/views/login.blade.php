<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                FashionablyLate
            </a>
            <a class="register__button" href="/register">register</a>
        </div>
    </header>

    <main>
        <div class="login__content">
            <h2>Login</h2>
        </div>
        <form class="form" action="/login" method="post">
            @csrf
            <div class="login__content">
                <div class="login__label">
                    <span class="login__label--item">メールアドレス</span>
                </div>
                <div class="login__form">
                    <input type="email" name="email" placeholder="例: test@example.com">
                </div>
                <div class="login__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login__content">
                <div class="login__label">
                    <span class="login__label--item">パスワード</span>
                </div>
                <div class="login__form">
                    <input type="password" name="password" placeholder="例: coachtech1106">
                </div>
                <div class="login__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="login__button">
                <button class="login__button-submit" type="submit">ログイン</button>
            </div>
        </form>
    </main>
</body>

</html>