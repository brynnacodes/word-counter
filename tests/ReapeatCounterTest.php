<?php
require_once 'src/RepeatCounter.php';

class RepeatCounterTest extends PHPUnit_Framework_TestCase
{
    //first test is for spec 1: program counts a single occurrence of a single letter in a string
    function test_count_repeat_singleLetter() {
        $input1 = 'a';
        $input2 = 'a';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(1, $result);
    }

    //second test, spec 2: program counts a single occurence of a single word in a string
    function test_count_repeat_singleWord() {
        $input1 = 'boat';
        $input2 = 'boat';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(1, $result);
    }
}

?>
