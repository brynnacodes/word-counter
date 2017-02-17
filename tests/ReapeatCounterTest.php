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
        $input1 = 'there were two cats and two dogs';
        $input2 = 'two';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(2, $result);
    }

    //fifth test, spec 5: program correctly handles user inputs with multiple cases
    function test_count_repeat_multipleCases() {
        $input1 = 'ThE COW jumPED OvEr THE moon';
        $input2 = 'the';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(2, $result);
    }

    //sixth test, spec 6: program returns false if user input is a numeric string
    function test_count_repeat_numberInput() {
        $input1 = '123';
        $input2 = '1';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(false, $result);
    }

    //seventh test, spec 7: program returns false if user input is empty
    function test_count_repeat_emptyInput() {
        $input1 = '';
        $input2 = '1';
        $test_repeat_counter = new RepeatCounter;

        $result = $test_repeat_counter->CountRepeats($input1, $input2);

        $this->assertEquals(false, $result);
    }

}

?>
