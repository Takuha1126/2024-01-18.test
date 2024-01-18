@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Salsa&display=swap" rel="stylesheet">
@endsection

@section('content')
<main>
    <div class="content-form__content">
        <div class="content-form__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/confirm" method="post">
            @csrf
        <table class="form__group">
            <tr class="form__group-title">
                <th class="form__label--item">お名前<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}"/>
                        <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}"/>
                    </td>
                <div>
            </tr>
            <div class="form__error">
            @if($errors->has('first_name'))
            @foreach($errors->get('first_name') as $message)
            <p class="error">{{ $message }}</p>
            @endforeach
            @endif
            </div>
            <div class="form__error">
            @error('last_name')
            <p class="error">{{ $message }}</p>
            @enderror
            </div>
            <tr class="form__group-title">
                <th class="form__label--item">性別<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <label><input type="radio" name="gender" value="男性"checked/>男性</label>
                        <label><input type="radio" name="gender" value="女性" />女性</label>
                        <label><input type="radio" name="gender" value="その他"/>その他</label>
                    </td>
                <div>
            </tr>
            <tr class="form__group-title">
                <th class="form__label--item">メールアドレス<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}"/>
                    </td>
                <div>
            </tr>
            <div class="form__error">
            @error('email')
            <p class="error">{{ $message }}<p>
            @enderror
            </div>
            </div>
            <tr class="form__group-title">
                <th class="form__label--item">電話番号<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <input class="form-tel" type="tell" name="first_tell" placeholder="080" value="{{ old('first_tell') }}"/>
                        <a>-</a>
                        <input class="form-tel" type="tell" name="middle_tell" placeholder="1234" value="{{ old('middle_tell') }}"/>
                        <a>-</a>
                        <input class="form-tel" type="tell" name="last_tell" placeholder="5678" value="{{ old('last_tell') }}"/>
                    </td>
                <div>
            </tr>
            <div class="form__error">
            @error('first_tell')
            <p class="error">{{ $message }}</p>
            @enderror
            </div>
            <div class="form__error">
            @error('middle_tell')
            <p class="error">{{ $message }}</p>
            @enderror
            </div>
            <div class="form__error">
            @error('last_tell')
            <p class="error">{{ $message }}</p>
            @enderror
            </div>
            <tr class="form__group-title">
                <th class="form__label--item">住所<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
                    </td>
                <div>
            </tr>
            <div class="form__error">
            @error('address')
            <p class="error">{{ $message }}</p>
            @enderror
            <tr class="form__group-title">
                <th class="form__label--item">建物名</th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101"/>
                    </td>
                <div>
            </tr>
            <tr class="form__group-title">
                <th class="form__label--item">お問合せの種類<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--text">
                        <div class="select-box">
                        <select  class="form__select" name="select">
                            <option hidden>選択してください</option>
                            <option value="商品のお届けについて">商品のお届けについて</option>
                            <option value="商品の交換について">商品の交換について</option>
                            <option value="商品トラブル">商品トラブル</option>
                            <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                            <option value="その他">その他</option>
                        </select>
                        </div>
                    </td>
                <div>
            </tr>
            <!--errpr-->
            <tr class="form__group-title">
                <th class="form__label--item">お問い合わせ内容<span class="form__label--required">※</span></th>
                <div class="form__group-content">
                    <td class="form__input--textarea">
                        <textarea name="detail" cols="50" rows="8"  placeholder="お問い合わせ内容をご記載ください" ></textarea>
                    </td>
                <div>
            </tr>
            <div class="form__error">
           @error('detail')
            <p class="error">{{ $message }}</p>
            @enderror
            </div>
        </table>
            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>
        </form>
    </div>
</main>
@endsection
