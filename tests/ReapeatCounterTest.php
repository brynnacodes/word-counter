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
}

?>
