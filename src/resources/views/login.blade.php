<!DOCTYPE html>
<html lang="en">
<head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/" style="text-decoration:none">
            FashionablyLate
        </a>
    </div>
    <form class="header-form" action="/register" method="post">
        @csrf
        <nav class="nav">
            <button class="nav_button">register</button>
        </nav>
    </form>
</header>

<main>
    @if ($errors->any())  {{--  エラーがあれば出力する --}}
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif
    <div class="container">
        <div class="container__title">
            <p class="container__title-ttl">{{__('Login')}}</p>
        </div>
        <form class="form" action="/admin" method="post">
            @csrf
            <div class="form__item">
                <div class="form__align">
                    <div class="form__item-ttl">
                        <p>メールアドレス</p>
                    </div>
                    <div class="form_item-ttl--input">
                        <input type="text" name="email" id="email" placeholder="例:test@example.com">
                    </div>
                    <div class="form__error">
                    </div>
                    <div class="form__item-pass">
                        <p>パスワード</p>
                    </div>
                    <div class="form_item-ttl--input">
                        <input type="text" name="password" id="password" placeholder="例:coachtech1106">
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
            </div>
            <div class="form-button">
                <button class="form-button__login">ログイン</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>
