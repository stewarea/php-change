<?php
  require_once "src/CoinCombination.php";
  class CoinCombinationTest extends PHPUnit_Framework_TestCase
    {
        function test_coinCombination()
        {
           $change_input= 100;

           //Act
           $newCoinCombination = new CoinCombination;
           $result = $newCoinCombination->countChange($change_input);
           //Assert
           $this->assertEquals("4 0 0 0", $result);
        }
        // function test_multiple()
        // {
        //   $input_string1 = "bread";
        //   $input_string2 = "beard dearb okay";
        //   $newAnagram = new Anagram;
        //   $result = $newAnagram->make_anagram($input_string1, $input_string2);
        //   //Assert
        //   $this->assertEquals("beard dearb", $result);
        // }
}
  ?>
