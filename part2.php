<?php
    header('Content-Type: text/plain');

    // Define the word to be used in the pattern.
    $word = "HELLO";

    // First loop: Incrementally display the word from the first character to the full word.
    for ($x = 0; $x < strlen($word); $x++) {
      // Extract a substring from the start to the current position and print it.
      // $x+1 determines the length of the substring, starting with 1 character and increasing.
      echo substr($word, 0, $x+1) . PHP_EOL; // PHP_EOL is a newline character, ensuring each iteration is on a new line.
    }
      
    // Second loop: Decrease the display of the word from full to the first character.
    for ($x = strlen($word); $x > 0; $x--) {
      // Extract a substring from the start to one less than the current length and print it.
      // $x-1 gradually decreases the length of the substring, removing one character at a time.
      echo substr($word, 0, $x-1) . PHP_EOL; // Again, PHP_EOL ensures each output is on a new line.
    }
    
?>

