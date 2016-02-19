<?php

    class RepeatCounter
    {
        function CountRepeats($string_input, $word_input)
        {
            $string_input = strtolower($string_input);
            $string_array = explode(" ",$string_input);
            $match_counter = 0;

            foreach($string_array as $word)
            {
                if($word_input == $word)
                {
                    $match_counter = $match_counter + 1;
                }
            }
            return $match_counter;
        }
    }

?>
