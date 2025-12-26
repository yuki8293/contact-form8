<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <!--ここはヘッダー（上の部分）-->
    <header class="header">
        <div class="header__inner">
            <!--クリックすると別ページへ移動-->
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
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
                            <input type="text" name="name" placeholder="テスト太郎" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
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
                            <input type="text" name="email" placeholder="test@icloud.com" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
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
                            <input type="text" name="tel" placeholder="09012345678" />
                        </div>
                        <div class="form__error">
                            <!--バリデーション機能を実装したら記述します。-->
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
    </main>
</body>

</html>