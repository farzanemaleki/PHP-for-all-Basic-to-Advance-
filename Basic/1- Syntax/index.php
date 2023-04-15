<?php
// This is a PHP script that prints "Hello, World!" to the screen.

// How to put a comment:
// One-line comment with // or #
// Multi-line comment with /* ... */
// For doc-blocks, we use /** ... */ to write documentation for source code.

/* 
    Print "Hello, World!" to the screen.
    For a new line in PHP, you should use "\n". It won't appear in the browser, but you can see its execution in your command prompt.
*/

echo "Hello, World!\n";

// To print something like "Joe's book", we have two ways: 
// 1. Skip the middle ' by using \ 
// 2. Surround the code by ""
echo 'farzane\'s book';
echo "\n";
echo "farzane's book\n";

// The difference between echo and print is that print has a return value of 1, so it can be used in expressions. 
// echo can take multiple parameters, while print can take only one argument. Echo is faster.
print "Hello World\n";

// Provide instructions for running the script.
echo "To run this script, you can:\n";
echo "- Save this file as index.php in your web server's document root.\n";
echo "- Open a web browser and go to http://localhost/index.php\n";
echo "- Alternatively, you can run this script from the command line by navigating to the directory containing this file and typing 'php index.php'\n";

// Variables: there are a few rules to follow when creating variables in PHP.
// The first definition should start with $ for variables, which must either start with a letter or underscore.
// The letter cannot be a number or special character.
$_12name = 'farzane';
$family = 'maleki';

// The way to define a constant variable is by using the define keyword.
define('NEW_LINE', "\n");

// Concatenation operator in PHP is a dot.
echo $_12name . ' ' . $family;
echo NEW_LINE;
// Other way to print variables
echo "name is {$_12name} and family is {$family}";
echo NEW_LINE;

// Variables in PHP by default are assigned by value.
$x = 1;
$y = $x;
$x = 3;
echo "x=$x y=$y";   // x=3 y=1
echo NEW_LINE;

// If you want to change y whenever x changes, you should assign the variable by reference instead of by value. 
// You need to add & before assigning.
$x = 1;
$y = &$x;
$x = 3;
echo "x=$x y=$y";   // x=3 y=3
echo NEW_LINE;
