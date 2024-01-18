<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
</head>
<body>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>{{ $error }}</div>
        @endforeach
    @endif

    @isset($registered)
        <div>登録に成功しました。メールアドレス：{{ $registered_email }}</div>
    @endisset
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/" style="text-decoration:none">
                FashionablyLate
            </a>
        </div>
        <form class="header-form" action="/login" method="post">
            @csrf
            <nav class="nav">
                <button class="nav_button">login</button>
            </nav>
        </form>
    </header>
    <main>
    <div class="container">
        <div class="container__title">
            <p class="container__title-ttl">Register</p>
        </div>
        <form class="form">
            <div class="form__item">
                <div class="form__align">
                    <div class="form__item-name">
                        <p class="form__item-name--ttl">お名前</p>
                    </div>
                    <div class="form__item-ttl--input">
                        <input type="text" name="name"  placeholder="例:山田 太郎">
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                </div>
                    <div class="form__item-ttl">
                        <p>メールアドレス</p>
                    </div>
                    <div class="form__item-ttl--input">
                        <input type="text" name="email" placeholder="例:test@example.com">
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
                    <div class="form__item-pass">
                        <p>パスワード</p>
                    </div>
                    <div class="form__item-ttl--input">
                        <input type="text" name="password" placeholder="例:coachtech1106">
                    </div>
                    <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                    </div>
            </div>
            <div class="form-button">
                <button class="form-button__login">登録</button>
            </div>
        </form>
    </div>
</main>
</body>
</html>