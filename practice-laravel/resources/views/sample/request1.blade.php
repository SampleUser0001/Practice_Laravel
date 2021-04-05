<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>requestを処理する</title>
</head>
<body>
  <h1>request処理結果</h1>
  <h2>入力</h2>
  <form action="{{ url('qiita/getRequestDate') }}" method="get">
    <div>a <input type="text" name="a" value="{{ old('a') }}"></div>
    <div>b <input type="text" name="b" value="{{ old('b') }}"></div>
    <div>c <input type="text" name="c" value="{{ old('c') }}"></div>
    <input type="submit" >
  </form>

  <hr>
  <h2>出力</h2>

  <div>get:{{$get}}</div>
  <div>input:{{$input}}</div>
  <div>request_get:{{$request_get}}</div>
  <div>query_get:{{$query_get}}</div>
  <div>query:{{$query}}</div>
  <div>all:{{$all}}</div>
  <div>only:{{$only}}</div>
  <div>except:{{$except}}</div>

  <hr>
  
  <h1>参考</h1>
  <a href="https://qiita.com/toontoon/items/eff426606ce0f194c345">Qiita:Laravelでリクエストデータを取得する</a>
</body>
</html>