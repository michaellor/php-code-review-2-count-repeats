<?php

    class CountRepeats
    {
        function findMatch($string_input, $word_input)
        {
            $string_input = strtolower($string_input);
            $string_array = explode(" ",$string_input);

            foreach($string_array as $word)
            {
                if($word_input == $word)
                {
                    return true;
                }
            }
        }
    }

?>
