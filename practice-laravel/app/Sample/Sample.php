<?php

namespace App\Sample;

class Sample {
  public $var = 'hogehoge';
  public static $staticVar = 'piyopiyo';
  
  public function getVar() {
    return $this->var;
  }
  
  public static function getStaticVar() {
    return Sample::$staticVar;
  }
}
