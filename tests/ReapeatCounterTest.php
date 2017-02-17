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

    //third test, spec 3: program counts a single occurence of a word in a multiple word string
    function test_count_repeat_oneWordMultiString() {
        $input1 = 'my name is john doe';
        $input2 = 'name';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(1, $result);
    }



    //fourth test, spec 4: program counts a two occurences of a single word in a multiple word string
    function test_count_repeat_multipleWordMultiString() {
        $input1 = 'the cow jumped over the moon';
        $input2 = 'the';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(2, $result);
    }
}

?>
