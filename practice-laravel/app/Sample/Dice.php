<?php

namespace App\Sample;

class Dice implements RollableDice
{

  public function roll(): int
  {
    return mt_rand(1, 6);
  }
}
?>