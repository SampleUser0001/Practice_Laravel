<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Route::get->name</title>
</head>
<body>
  <h1>Hello Route::get->name</h1>
  <h2>条件分岐で使う</h2>
  <?php
    echo 'Route::current() -> getName() : ' . Route::current() -> getName() . '<br>'
  ?>
  @if(\Route::current() -> getName() == 'index')  
    <p>index</p>
  @else
    <p>else</p>
  @endif
</body>
</html>