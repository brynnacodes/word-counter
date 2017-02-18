# _Word Counter_

#### _A PHP application to determine how many times a word appears in a string!, {02/17/17}_

#### By _**Brynna Klamkin-McCarter**_

## Description

_This PHP/Silex application allows users to enter a sentence and count how many instances of a particular word occur in that sentence. The program also checks to see if the word being counted returns a dictionary definition, and if so, displays it using the Merriam-Webster api._

## Setup/Installation Requirements

* _Clone this repository_
* _Install composer_
* _Start a local server in the web directory_
* _Navigate to localhost:8000 in your preferred web browser_

## Specifications

* _Behavior: The program will find and output the occurrence a single letter_
    *_Input: String: "a", Find: "a"_
    *_Output: 1_

* _Behavior: The program will find and output the single occurrence of a single word_
    *_Input: String: "hello", Find: "hello"_
    *_Output: 1_

* _Behavior: The program will find a single occurrence of a word in a multi-word    string_
    *_Input: String: "My name is John Doe", Find: "name"_
    *_Output: 1_

* _Behavior: The program will find multiple occurrences of a single word in a string_
    *_Input: String: "There were two dogs and two cats", Find: "two"_
    *_Output: 2_

* _Behavior: The program will accept title case, capitalized, or multi case strings_
    * _Input: String: "ThE COW jumPED OvEr THE moon", Find: "the"_
    * _Output: 2_

* _Behavior: The program will reject number inputs_
    * _Input: 123_
    * _Output: 123_

* _Behavior: The program will return nothing if the user input is empty_
    * _Input: ""_
    * _Output: ""_

* _Behavior: The program will return a definition for the word being counted_
    * _Input: String: "The old man walked down the lane", Find: "old"_
    * _Output: "old: dating from the remote past"_

## Known Bugs

_One known api issue related to searching the word "the". Error is within Merriam-Webster xml file._

## Support and contact details

_Please contact the repo administrator for any concerns, suggestions, or support._

## Technologies Used

_PHP, PHPUnit, Silex, Twig, Bootstrap_

### License

*This software is licensed under the MIT license*

Copyright (c) 2017 **_Brynna Klamkin-McCarter_**
