<?php
    class RepeatCounter
    {

        function CountRepeats($input1, $input2)
        {
            if(!is_numeric($input1)) {
                $stringInput = strtolower($input1);
                $wordInput = strtolower($input2);

                $result = substr_count($stringInput, $wordInput);

                return $result;
            }
            else {
                return false;
            }
        }
    }
?>
