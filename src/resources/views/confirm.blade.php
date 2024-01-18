@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<main>
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2>Confirm</h2>
        </div>
        <form class="form" action="/contacts" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__name">
                            <input class="first_name" type="text" name="first_name" value="{{$contact['first_name'] }}" readonly/>
                            <input class="last_name" type="text" name="last_name" value="{{$contact['last_name'] }}" readonly/>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__tell">
                            <input class="first_tell" type="tell" name="first_tell" value="{{ $contact['first_tell'] }}" readonly>
                            <a>-</a>
                            <input class="middle_tell" type="tell" name="middle_tell" value="{{ $contact['middle_tell'] }}" readonly>
                            <a>-</a>
                            <input class="last_tell" type="tell" name="last_tell" value="{{ $contact['last_tell'] }}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="{{ $contact['address']}}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="{{ $contact['building']}}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="text" name="hidden" value="{{ $contact['select']}}" readonly>
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header"></th>
                        <td class="confirm-table__text">
                            <input type="text" name="detail" value="{{$contact['detail']}}" readonly>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <a class="form__button-delete" href="http://localhost">修正</a>
            </div>
        </form>
    </div>
</main>
@endsection