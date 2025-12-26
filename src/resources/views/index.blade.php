@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<!--レイアウト・全体の枠-->
<div class="contact-form__content">
    <!--見出し専用-->
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
    </div>
    <!--入力データを送信する箱-->
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <!--一つの入力項目をひとまとめにする箱-->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">必須</span>
            </div>
            <!--入力エリア全体を管理する箱-->
            <div class="form__group-content">
                <!--テキスト入力専用の箱-->
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="テスト太郎" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">必須</span>
            </div>
            <!--入力エリア全体を管理する箱-->
            <div class="form__group-content">
                <!--テキスト入力専用の箱-->
                <div class="form__input--text">
                    <input type="text" name="email" placeholder="test@icloud.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">必須</span>
            </div>
            <!--入力エリア全体を管理する箱-->
            <div class="form__group-content">
                <!--テキスト入力専用の箱-->
                <div class="form__input--text">
                    <input type="text" name="tel" placeholder="09012345678" value="{{ old('tel') }}" />
                </div>
                <div class="form__error">
                    @error('tel')
                    + {{ $message }}
                    + @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <!--入力エリア全体を管理する箱-->
            <div class="form__group-content">
                <!--テキスト入力専用の箱-->
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="資料いただきたいです"></textarea>
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
        </div>
    </form>
</div>
@endsection