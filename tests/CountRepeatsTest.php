<?php
    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {
        function test_string_input_to_array()
        {
            //Arrange
            $new_count = new CountRepeats;
            $string_input = "That fish is a red fish";

            //Act
            $result = $new_count->findMatch($string_input);

            //Assert
            $this->assertEquals(["That","fish","is","a","red","fish"], $result);
        }
    }
?>
