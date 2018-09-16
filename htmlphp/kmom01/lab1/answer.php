<?php

/**
 * @preserve ad7de2203a7585608cdff528cd1adf5c
 *
 * ad7de2203a7585608cdff528cd1adf5c
 * htmlphp
 * lab1
 * v2
 * lobe16
 * 2018-08-27 14:29:14
 * v3.1.0 (2018-08-17)
 *
 * Generated 2018-08-27 16:29:14 by dbwebb lab-utility v3.1.0 (2018-08-17).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__."/.Dbwebb.php";
$dbwebb = new Dbwebb();


/** ===================================================================
 * Lab 1 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */


/** -------------------------------------------------------------------
 * Section 1 . Integers, floats and basic arithmetics
 *
 * The foundation of numbers and basic arithmetic.
 *
 */


/**
 * Exercise 1.1 (1 points)
 *
 * Create two variables called `numOne` and `numTwo` and assign to them the
 * values 98 and 174.
 *
 * Sum up the variables and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numOne = 98;
$numTwo = 174;
$result = $numOne + $numTwo;


$ANSWER = $result;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Use your two variables `numOne` and `numTwo`. Subtract `numOne` from
 * `numTwo` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$subtract = $numTwo - $numOne;

$ANSWER = $subtract;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Divide `numOne` with `numTwo` and use the function `round()` to round the
 * answer to 1 decimal.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$divide = round($numOne / $numTwo, 1);

$ANSWER = $divide;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create a variable called `floatOne` and give it the value 35.95. Create
 * another variable called `floatTwo` and give it the value 160.45. Sum up the
 * variables and answer with the result rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$floatOne = 35.95;
$floatTwo = 160.45;
$sumRounded = round(($floatOne + $floatTwo), 2);

$ANSWER = $sumRounded;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Subtract `floatOne` from `floatTwo`, round up to 3 decimals and answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$subtractAndRoundToThree = round(($floatTwo - $floatOne), 3);

$ANSWER = $subtractAndRoundToThree;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Create a variable called `floatThree` and give it the value 84.81.  Add
 * `floatOne` to `floatTwo` and multiply the result with `floatThree`, take
 * that result and divide it by `numOne`.
 *
 * Answer with the result rounded to 4 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$floatThree = 84.81;
$addFloatsAndMultiply = ($floatOne + $floatTwo) * $floatThree;
$divideFloatsAndRound = round(($addFloatsAndMultiply / $numOne), 4);


$ANSWER = $divideFloatsAndRound;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Create a variable `modOne` with a value of 830 and a variable `modTwo`
 * holding the value 42.
 *
 * Answer with the result of `modOne` modulo (%) `modTwo`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$modOne = 830;
$modeTwo = 42;
$modulus = $modOne % $modeTwo;

$ANSWER = $modulus;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */


/**
 * Exercise 2.1 (3 points)
 *
 * You are going to solve the well-known 'chessboard and rice grain problem'.
 *
 * Imagine you have a standard chessboard and put one rice grain on the first
 * square. Then you put two grains on the second square, four on the third,
 * eight on the fourth and so on... How many rice grains are there on the last
 * square?
 *
 * Answer with the square root of the result, rounded to 2 decimals. (Make
 * sure the answer is of the type `double`).
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
// It appears the grains are doubled after every square (except the first)
// Total squares = 63 (64 - 1)
$squares = 63;
$grainsInLastSquare = pow(2.0, 63);
$squareRootRoundedToTwo = round(sqrt($grainsInLastSquare), 2);

$ANSWER = $squareRootRoundedToTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (3 points)
 *
 * Sum all numbers from 1 to 100. Answer with the result. (Make sure the
 * answer is of the type `integer`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$sum = 0;
for ($var = 1; $var <= 100; $var++) {
    $sum += $var;
}
$ANSWER = $sum;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
