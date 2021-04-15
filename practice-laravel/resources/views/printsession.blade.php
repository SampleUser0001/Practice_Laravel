<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>セッションの表示</title>
</head>
<body>
  <h1>セッションを表示する</h1>
  <h2>PHP</h2>
  <?php
    session_start();
    
    if(isset($_SESSION['count'])){
      $_SESSION['count'] = $_SESSION['count'] + 1;
    } else {
      $_SESSION['count'] = 1;
    }
    print "You've looked at this page " . $_SESSION['count'] . ' times.';
  ?>
  <h2>Laravel</h2>
  You've looked at this page {{$countByLaravel}} times.
</body>
</html>