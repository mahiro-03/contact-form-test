<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="">
                FashionablyLate
            </a>
            <a class="login__button" href="/login">/login</a>
        </div>
    </header>

    <main>
        <div class="register__content">
            <h2>Register</h2>
        </div>
        <form class="form" action={{ route('register') }} method="post">
            @csrf
            <!-- 入力フォームたち -->
            <div class="register__content">
                <div class="register__label">
                    <span class="register__label--item">お名前</span>
                </div>
                <div class="register__form">
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="例: 山田 太郎">
                </div>
                <div class="register__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register__content">
                <div class="register__label">
                    <span class="register__label--item">メールアドレス</span>
                </div>
                <div class="register__form">
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="例: test@example.com">
                </div>
                <div class="register__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register__content">
                <div class="register__label">
                    <span class="register__label--item">パスワード</span>
                </div>
                <div class="register__form">
                    <input type="password" name="password" value="{{ old('password') }}" placeholder="例: coachtech1106">
                </div>
                <div class="register__error">
                    @error('password')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="register__button">
                <button class="register__button-submit" type="submit">登録</button>
            </div>
        </form>
    </main>
</body>

</html>