<?php
$strings = ["Hello", "World", "PHP", "Programming"];


foreach ($strings as $string) {
 $vowels = array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U");   
    $count=0;
    //vowel counting
    for ($i = 0; $i < strlen($string); $i++) {
          if (in_array($string[$i],$vowels)) {
            $count++;
          }
        }
    // Reversing string
    $reversedString = strrev($string);

    // Printing output
    echo "Original String: $string, Vowel Count: $count, Reversed String: $reversedString\n";
}
