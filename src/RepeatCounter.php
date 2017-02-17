<?php
    class RepeatCounter
    {

        function CountRepeats($input1, $input2)
        {
            if(!strlen($input1) == 0 && !strlen($input2) == 0) {
                if(!is_numeric($input1)) {
                    $stringInput = strtolower($input1);
                    $wordInput = strtolower($input2);
                    $result = 0;
                    $wordArray = explode(" ", $stringInput);

                    foreach ($wordArray as $word) {
                        if($word == $wordInput) {
                            $result =  $result + 1;
                        }
                    }
                    return $result;
                }
                else {
                    return false;
                }
            } else {
                return false;
            }
        }

//this function gets and reads xml files and uses the merriam webster free api to look up word definitions for user input

        function CheckWord($input2)
        {
            $word_url = 'http://www.dictionaryapi.com/api/v1/references/collegiate/xml/'.$input2.'?key=59c48b7e-eff8-4bd0-9c5b-ad0781f94ca3';
            $response = file_get_contents($word_url);

            if ($response) {
                $word_data = simplexml_load_string($response);
                if ($word_data->entry->ew == $input2) {
                    return $word_data->entry->def->dt[0];
                }
                else {
                    return false;
                }
            }
            else {
                return false;
            }
        }
    }
?>
