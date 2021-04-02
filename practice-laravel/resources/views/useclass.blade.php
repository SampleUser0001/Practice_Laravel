<!DOCTYPE html>
<html lang="ja">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Classを使う</title>
</head>
<body>
  <h1>Classを使う</h1>
  <?php
  use App\Sample\Sample;
  
  echo Sample::$staticVar . '<br>' ;
  echo Sample::getStaticVar() . '<br>' ;
  
  $sample = new Sample();
  
  echo `<p></p>`;
  echo $sample->var . '<br>';

  echo $sample->getVar();
  ?>

</body>
</html>