# Practice_Laravel
Laravelの勉強

## バージョン

Laravel v8.35.1 (PHP v8.0.3)

## サーバ起動

``` sh
cd practice-laravel && ./vendor/bin/sail up
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
  - [https://readouble.com/laravel/4.2/ja/quick.html](https://readouble.com/laravel/4.2/ja/quick.html)

## ロケールの設定

./config/app.php

``` php : ./config/app.php
    'timezone' => 'Asia/Tokyo',
    'locale' => 'ja',
    'fallback_locale' => 'ja',
    'faker_locale' => 'ja_JP',
```