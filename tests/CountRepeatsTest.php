<?php
    require_once "src/CountRepeats.php";

    class CountRepeatsTest extends PHPUnit_Framework_TestCase
    {
        function test_string_input_to_array()
        {
            //Arrange
            $new_count = new CountRepeats;
            $string_input = "That fish is a red fish";
            $word_input = "fish";

            //Act
            $result = $new_count->findMatch($string_input, $word_input);

            //Assert
            $this->assertEquals(["that","fish","is","a","red","fish"], $result);
        }

        function test_match_word_in_array()
        {
            //Arrange
            $new_count = new CountRepeats;
            $string_input = "That fish is a red fish";
            $word_input = "fish";

            //Act
            $result = $new_count->findMatch($string_input, $word_input);

            //Assert
            $this->assertEquals(TRUE, $result);
        }

        function test_match_word_in_array_counter()
        {
            //Arrange
            $new_count = new CountRepeats;
            $string_input = "That fish is a red fish";
            $word_input = "fish";

            //Act
            $result = $new_count->findMatch($string_input, $word_input);

            //Assert
            $this->assertEquals(2, $result);
        }
    }
?>
