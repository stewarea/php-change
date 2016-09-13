<?php
  class CoinCombination
  {
    public $quarter = 0;
    public $dime = 0;
    public $nickel = 0;
    public $penny = 0;

    function countChange($change)
    {
      $quarter = 0;
      $dime = 0;
      $nickel = 0;
      $penny = 0;
      while ($change > 0) {
        if(($change - 25) >= 0){
          $quarter += +1;
          $change -= 25;
        } elseif (($change - 10) >= 0){
            $dime += +1;
            $change -= 10;
        }  elseif (($change - 5) >= 0){
              $nickel += +1;
              $change -= 5;
        } elseif (($change - 1) >= 0){
                $penny += +1;
                $change -= 1;
        }


      }
      $this->quarter = $quarter;
      $this->dime = $dime;
      $this->nickel = $nickel;
      $this->penny = $penny;

      return "Quarters:" . $quarter . " " . $dime . " " . $nickel . " " . $penny;
    }
  }
?>
