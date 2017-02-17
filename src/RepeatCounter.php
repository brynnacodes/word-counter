<?php
    class RepeatCounter
    {

        function CountRepeats($input1, $input2)
        {
          $stringInput = $input1;
          $wordInput = $input2;

          $result = substr_count($stringInput, $wordInput);

          return $result;
        }
    }
?>
