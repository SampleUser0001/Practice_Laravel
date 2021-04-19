<?php

namespace App\Http\Controllers;

use App\Sample\RollableDice;

class DiceController extends Controller
{
  private $dice;
  
  public function __construct(RollableDice $dice)
  {
    $this->dice = $dice;
  }
  
  public function __invoke() {
    return $this->rollDouble($this->dice);
  }
  
  public function rollDouble(RollableDice $dice)
  {
    return $dice->roll() + $dice->roll();
  }
}
?>