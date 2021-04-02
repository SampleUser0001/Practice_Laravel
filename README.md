# Practice_Laravel
Laravelの勉強

## サーバ起動

``` sh
cd practice-laravel && ./vendor/bin/sail up
```

## ルーティング

修正対象ファイルは下記。  
./routes/web.php

``` php
use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return 'Users!';
});
```

- URL
  - [http://localhost/users](http://localhost/users)
- クイックスタート
  - [https://readouble.com/laravel/4.2/ja/quick.html](https://readouble.com/laravel/4.2/ja/quick.html)