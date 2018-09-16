<?php

/**
 * @preserve 410233585ca6ea66e165d908f8ce42a5
 *
 * 410233585ca6ea66e165d908f8ce42a5
 * htmlphp
 * lab2
 * v2
 * lobe16
 * 2018-09-01 08:25:28
 * v3.1.0 (2018-08-17)
 *
 * Generated 2018-09-01 10:25:28 by dbwebb lab-utility v3.1.0 (2018-08-17).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(- 1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();


/** ===================================================================
 * Lab 2 - htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP manual](http://php.net/manual/en/langref.php).
 *
 * Here you will find everything this lab will go through and much more.
 *
 */


/** -------------------------------------------------------------------
 * Section 1 . Strings and basic string operations
 *
 * The foundation for strings.
 *
 */


/**
 * Exercise 1.1 (1 points)
 *
 * Create a variable called `wordOne` and assign the word `"ice"` to it.
 *
 * Create another variable called `wordTwo` and assign the word `"rabbit"` to
 * it.
 *
 * Concatenate the two strings, and separate them by a hyphen `-`, into a new
 * variable called `result`.
 *
 * Answer with the result-variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$wordOne = "ice";
$wordTwo = "rabbit";
$concat = $wordOne . "-" . $wordTwo;

$ANSWER = $concat;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a variable, `floatNumber`, and assign the value 55.53. Concatenate
 * your variable `wordOne` with your variable `floatNumber`, separate the
 * words with a `=`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$floatNumber = 55.53;
$concat2 = $wordOne . "=" . $floatNumber;

$ANSWER = $concat2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create a variable, `intNumber`, and assign the value 299. Concatenate your
 * variable `intNumber` with your variable `wordTwo`, separate the words with
 * a space. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$intNumber = 299;
$concat3 = $intNumber . " " . $wordTwo;
$ANSWER = $concat3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Create the string: `"There are 299 rabbit's doing some ice."` by combining
 * pure text with the values of your variables `wordOne`, `wordTwo` and
 * `intNumber`. Store the resulting text in a variable `sentence`. Answer with
 * the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sentence = "There are $concat3's doing some $wordOne.";

$ANSWER = $sentence;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use `strlen()` to find the length of the variable `sentence`. Answer with
 * the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$len = strlen($sentence);
$ANSWER = $len;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/**
 * Exercise 1.6 (1 points)
 *
 * Use `substr()` to find the character at index 2 in the word `"foot"`.
 * Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$foot = "foot";
$charAtIndex2 = $foot[1];
$ANSWER = $charAtIndex2;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.6", $ANSWER, false);

/**
 * Exercise 1.7 (1 points)
 *
 * Use `substr()` to find the two characters at index 3 and 4 in the word
 * `"crocodile"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$crocodile = "crocodile";
$charAt3And4 = substr($crocodile, 3, 2);

$ANSWER = $charAt3And4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.7", $ANSWER, false);

/**
 * Exercise 1.8 (1 points)
 *
 * Use `strpos()` to find the first matching index of the character `y` in the
 * word `"monkey"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$monkey = "monkey";
$pos = strpos($monkey, 'y');

$ANSWER = $pos;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.8", $ANSWER, false);

/**
 * Exercise 1.9 (1 points)
 *
 * Use `strpos()` to find the first matching, (if any), index of the
 * characters `xyz` in the word `"monkey"`. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$posxyz = strpos($monkey, "xyz");

$ANSWER = $posxyz;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.9", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Conditions, booleans, if, else and else if
 *
 *
 *
 */


/**
 * Exercise 2.1 (1 points)
 *
 * Store the boolean result of the test: `278 is less than 379` in a variable.
 * Answer with the variable.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$isLessthan = 278 < 379;

$ANSWER = $isLessthan;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Answer with the boolean value of: `217 is larger than 256`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$isGreaterThan = 217 > 256;
$ANSWER = $isGreaterThan;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Sum up the numbers: 8, 4, 6, 3 and 9. Save the result in a variable called
 * `totalSum`.
 *
 * Create an if/elseif-statement to see if `totalSum` is higher, lower or
 * equal to 21.
 *
 * Answer with the corresponding result as a string: `"higher"`, `"lower"`,
 * `"equal"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$totalSum = 8 + 4 + 6 + 3 + 9;
$comp = 21;
$str = "";
if ($totalSum === $comp) {
    $str = "equal";
} else if ($totalSum > $comp) {
    $str = "higher";
} else {
    $str = "lower";
}
$ANSWER = $str;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/**
 * Exercise 2.4 (1 points)
 *
 * Create an if-statement that checks if a value is between (or equal to) 22
 * and  35. Use the variable `totalSum` from last exercise to test the
 * if-statement. Answer with a boolean `true` if the value is between the
 * values, otherwise respond with `false`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$min = 22;
$max = 35;
$valueBetween = ($totalSum >= $min && $totalSum <= $max);

$ANSWER = $valueBetween;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.4", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Iteration and loops
 *
 * For-loops and while-loops.
 *
 */


/**
 * Exercise 3.1 (1 points)
 *
 * Create a while-loop that adds 8 to the number 56, 37 times. Use variables
 * to store the numbers. Answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$sum = 56;
$iterations = 37;
$times = 0;
$add = 8;
while ($times < $iterations) {
    $sum += $add;
    $times ++;
    //echo "Loop: $times \tSum: $sum\n";
}

$ANSWER = $sum;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, true);

/**
 * Exercise 3.2 (1 points)
 *
 * Create a while-loop that subtracts 4.49 from the number 641 until the
 * number is between (not equal to) 35 and 45. Answer with the final result as
 * a float, rounded to 2 decimals.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$startNumber = 641;
$subtract = 4.49;

while (true) {
    $startNumber -= $subtract;
    $roundStart = round($startNumber, 2);
    if ($roundStart < 45 && $roundStart > 35) {
        break;
    }
}
$ANSWER = round($startNumber, 2);

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Create a for-loop that iterates from 0 to (including) 19. Add the integer
 * value for each iteration to a string and separate each item with a `,`
 * (comma). Answer with the final string without an ending `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$stringNumber = "";
for ($var = 0; $var <= 19; $var ++) {
    $stringNumber .= $var . ",";
}

$ANSWER = trim($stringNumber, ",");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */


/**
 * Exercise 4.1 (3 points)
 *
 * Create a for-loop that goes through (and including) the numbers 35 to 45.
 * If the current number is even, you should multiply it with PI and add it to
 * a variable `res`. If the current number is odd, you should subtract the
 * square root of it, from the variable `res`. If the current number ends with
 * a zero, then ignore it. Answer with the final result of `res` and round it
 * to the nearest higher integer value.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$minVal = 35;
$maxVal = 45;
$pi = pi();
$res = 0;
for ($num = $minVal; $num <= $maxVal; $num ++) {
    if ($num % 10 === 0) {
        //echo "Ends with zero: $num\n";
    } else if ($num % 2 === 0) {
        //echo "Even : $num\n";
        $res += $num * $pi;
    } else {
        // echo "Odd: $num\n";
        $res -= sqrt($num);
    }
}
$ANSWER = intval(ceil($res));

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, true);


// Wrap it up
exit($dbwebb->exitWithSummary());
