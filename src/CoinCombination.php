<?php
  class CoinCombination
  {
    // function makeCombination($change) {
    //   if(($change - 25) >= 0){
    //     quarter += +1;
    //   } elseif (($change - 10) >= 0){
    //       dime += +1;
    //     }  elseif (($change - 10) >= 0){
    //         nickel += +1;
    //       } elseif (($change - 10) >= 0){
    //           penny+= +1;
    //         }
    // else {
    //     return "enter change!"
    //   }
    // }

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
      return "" . $quarter . " " . $dime . " " . $nickel . " " . $penny;
    }
  }
?>
