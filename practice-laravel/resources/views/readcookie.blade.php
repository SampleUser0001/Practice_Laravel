<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Read cookie</title>
</head>
<body>
  <h1>Cookieを読み込む</h1>
  <h2>Laravel</h2>
    <div>key : {{$key}}</div>
    <div>value : {{$value}}</div>
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