<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Read cookie</title>
</head>
<body>
  <h1>Cookieを読み込む</h1>
  <h2>日付</h2>
  <?php
    echo 'date : ' . now();
  ?>
  <hr>
  <h2>Laravel</h2>
    <div>agencyCode : {{$agencyCode}}</div>
    <div>key : {{$key}}</div>
    <div>value : {{$value}}</div>
    <div></div>
    <div>key2 : {{$key2}}</div>
    <div>value2 : {{$value2}}</div>
  <hr>
  <h2>PHP</h2>
  <?php
    echo '<ul>';
    foreach($_COOKIE as $key => $value ){
      echo '<li>' . $key . ' , ' . $value . '</li>';
    }
    echo '</ul>';
  ?>
  <hr>
  <a href="setcookie">Cookieを書き込む</a>
</body>
</html>