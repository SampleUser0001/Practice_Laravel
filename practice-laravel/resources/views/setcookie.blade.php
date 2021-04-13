<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>requestを処理する</title>
</head>
<body>
  <h1>Cookie登録(Laravel)</h1>
  <h2>入力</h2>
  <form action="{{ url('setcookie') }}" method="post">
    @csrf
    <div>key <input type="text" name="key"></div>
    <div>value <input type="text" name="value"></div>
    <div><input type="checkbox" name="httponly">httponly</input></div>
    <input type="submit" >
  </form>
</body>
</html>