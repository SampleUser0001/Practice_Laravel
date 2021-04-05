<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Read cookie</title>
</head>
<body>
  <h1>Cookieを読み込む</h1>
  <h2>Laravel</h2>
  <?php
    use Illuminate\Support\Facades\Cookie;
    
    // Cookieの取得
    $key = 'key';
    echo 'key = ' . $key . '<br>';
    if(Cookie::has($key)){
      echo Cookie::get($key);
    } else {
      echo 'Cookie dosen\'t have ' . $key ;
    }
  ?>
  <hr>
  <h2>PHP</h2>
  <?php
    echo '<ul>';
    foreach($_COOKIE as $key => $value ){
      echo '<li>' . $key . ' , ' . $value . '</li>';
    }
    echo '</ul>';
  ?>
</body>
</html>