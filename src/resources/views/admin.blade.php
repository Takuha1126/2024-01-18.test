<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
</head>
<body>
    <body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
        <form class="header-form">
            <nav class="nav">
                <button class="nav_button">logout</button>
            </nav>
        </form>
    </header>
    <main>
        <div class="main__title">
            <p class="main__title-admin">Admin</p>
        </div>
        <div class="main__flex">
            <form class="main__flex-form">
                <div class="flex__input">
                    <input  type="text" name="content" placeholder="名前やメールアドレスを入力してください">
                </div>
                <div class="flex__gender">
                    <select class="main__flex-form--gender">
                        <option value="セレクト1">全て</option>
                        <option value="セレクト2">男性</option>
                        <option value="セレクト3">女性</option>
                        <option value="セレクト4">その他</option>
                    </select>
                </div>
                <div class="select-box">
                    <select class="select-box__item">
                        <option value="セレクト1">商品のお届けについて</option>
                        <option value="セレクト2">商品の交換について</option>
                        <option value="セレクト3">商品トラブル</option>
                        <option value="セレクト4">ショップへのお問い合わせ</option>
                        <option value="セレクト5">その他</option>
                    </select>
                </div>
                <div class="flex__date">
                    <input type="date"  name="date" value="日付を選択してください" />
                </div>
            </form>
        </div>
        <div class="main__export">
            <from class="main__export-form">
                <button class="button__export">エクスポート</button>
                <ul class="pagination">
                    <!--ページネーション-->
                </ul>
            </from>
        </div>
        <div class="todo-table">
            <table class="todo-table__inner">
                <tr class="todo-table__row">
                    <th class="todo-table__th">
                        <span class="todo-table__name">お名前</span>
                        <span class="todo-table__gender">性別</span>
                        <span class="todo-table__email">メールアドレス</span>
                        <span class="todo-table__content">お問合せの種類</span>
                    </th>
                </tr>
                <tr class="todo-table__ttl">
                    <td class="todo-table__abut">
                        <form class="update-form" action="/">
                            @method('PATCH') @csrf
                            <div class="update-form__item">
                                <input class="update-form__item-name" type="text" name="name" value="">
                                <input class="update-form__item-gender" type="text" name="gender" value="">
                                <input class="update-form__item-email" type="text" name="email" value="">
                                <input class="update-form__item-content" type="text" name="content" value="">
                                <button class="update-form__button-submit" type="submit">詳細</button>
                            </div>
                        </form>
                    </td>
                </tr>
            </table>
            <div class="todo-table__item">
                <form class="delete-form">
                    @method('DELETE') @csrf
                    <div class="delete-form__button">
                        <button class="delete-form__button-submit">
                            リセット
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>