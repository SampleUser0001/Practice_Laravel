# Practice_Laravel
Laravelの勉強

## バージョン

Laravel v8.35.1 (PHP v8.0.3)

## サーバ起動

``` sh
cd practice-laravel 
composer update
./vendor/bin/sail up
```

## ルーティング

修正対象ファイルは下記。  
./routes/web.php

``` php : ./routes/web.php
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return 'Users!';
});
```

- URL
  - [http://localhost/users](http://localhost/users)
- クイックスタート
  - [https://laravel.com/docs/8.x](https://laravel.com/docs/8.x)

## ロケールの設定

./config/app.php

``` php : ./config/app.php
    'timezone' => 'Asia/Tokyo',
    'locale' => 'ja',
    'fallback_locale' => 'ja',
    'faker_locale' => 'ja_JP',
```

## ページを作成する

### ルーティング

[./practice-laravel/routes/web.php](./practice-laravel/routes/web.php)

### ページ

[./practice-laravel/resources/views/index.blade.php](./practice-laravel/resources/views/index.blade.php)

### URL

[http://localhost/index](http://localhost/index)

## クラスの宣言と使用

### クラス作成

[./practice-laravel/app/Sample/Sample.php](./practice-laravel/app/Sample/Sample.php)  
※app配下にたくさんある。

### 使用方法

[./practice-laravel/resources/views/useclass.blade.php](./practice-laravel/resources/views/useclass.blade.php)

## GetRequestの処理

### URL

[http://localhost/qiita/getRequestDate](http://localhost/qiita/getRequestDate)

### 参考

- [Laravel-The Basics-Requests](https://laravel.com/docs/8.x/requests)
- [Qiita:Laravelでリクエストデータを取得する](https://qiita.com/toontoon/items/eff426606ce0f194c345)
- [Qiita:Laravel で Target class \[Controller\] does not exist.が出た時の対応](https://qiita.com/tsig/items/bef5e7611c69e93a573e)

## Cookieを扱う

うまく読み込めていないが、とりあえず改ざんが発生しないことは確認した。[マニュアル](https://readouble.com/laravel/8.x/ja/requests.html)参照。
Laravelから読み書きするためには```app/Http/Middleware/EncryptCookies.php```にキーを記載する必要がある。

### src

- [./practice-laravel/app/Http/Middleware/EncryptCookies.php](./practice-laravel/app/Http/Middleware/EncryptCookies.php)
- [./practice-laravel/app/Http/Controllers/CookieHandling.php](./practice-laravel/app/Http/Controllers/CookieHandling.php)
- [./practice-laravel/resources/views/readcookie.blade.php](./practice-laravel/resources/views/readcookie.blade.php)

### URL

[http://localhost/readcookie](http://localhost/readcookie)

### 参考

- [Qiita:LaravelのMiddlewareでcookieがリクエストから取得できない場合にやること](https://qiita.com/pinekta/items/7ed2b73b90c7be8e5fe6)
- [Qiita:【Laravel】クッキーを読み書き](https://qiita.com/yktk435/items/c1391037a7fa70110337)

## Traceの禁止

そもそもLaravelにRoute::traceメソッドが存在しない。
デフォルトの設定でTRACEメソッドが実行できない。

## Cookieのhttponly設定

デフォルトの場合、httponlyはonになる。  
一応変更できるはずなのだが・・・

### 確認方法

Chromeの場合、右クリック→検証→アプリケーションタブ→HTTPOnly欄を確認。

### ログ

``` sh 
tail -f ./storage/logs/laravel.log 
```

## セッションの生成

- [PrintSessionController.php](./practice-laravel/app/Http/Controllers/PrintSessionController.php)
- [printsession.blade.php](./practice-laravel/resources/views/printsession.blade.php)

### 参考

- [Laravelでセッションを使ってみる:Qiita](https://qiita.com/reflet/items/5638ab18fd7cededed17)

## Route::get->nameする

- [./practice-laravel/routes/web.php](./practice-laravel/routes/web.php)
- [./practice-laravel/resources/views/usename.blade.php](./practice-laravel/resources/views/usename.blade.php)

## コンストラクタインジェクション

- [./practice-laravel/app/Sample/LoadedDice.php](./practice-laravel/app/Sample/LoadedDice.php)
- [./practice-laravel/app/Sample/Dice.php](./practice-laravel/app/Sample/Dice.php)
- [./practice-laravel/app/Sample/RollableDice.php](./practice-laravel/app/Sample/RollableDice.php)
- [./practice-laravel/app/Providers/AppServiceProvider.php](./practice-laravel/app/Providers/AppServiceProvider.php)

### 参考

- [Laravelで始める依存性の注入（DI）:Qiita](https://qiita.com/harunbu/items/079ea728d2c9cf4f44d5)

## 参考

- [Laravel](https://laravel.com/)
  - 公式
- [Qiita:PHPフレームワークLaravelの使い方](https://qiita.com/toontoon/items/c4d0371e504c37f6576e)