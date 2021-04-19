<?php

namespace App\Sample;

class LoadedDice implements Rollable
{
  public function roll(): int
  {
    return 6;
  }
}
?>