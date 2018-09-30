<?php

/**
 * @preserve 059b49b2bab7e2faef48c8c2669eeb96
 *
 * 059b49b2bab7e2faef48c8c2669eeb96
 * htmlphp
 * lab3
 * v2
 * lobe16
 * 2018-09-16 09:41:10
 * v3.1.2 (2018-09-06)
 *
 * Generated 2018-09-16 11:41:10 by dbwebb lab-utility v3.1.2 (2018-09-06).
 * https://github.com/dbwebb-se/lab
 */

// Set error reporting to verbose
error_reporting(- 1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors

// Load and create object with lab utilities
require __DIR__ . "/.Dbwebb.php";
$dbwebb = new Dbwebb();


/** ===================================================================
 * Lab 3 - Htmlphp
 *
 * If you need to peek at examples or just want to know more, take a look at
 * the [PHP Manual](http://php.net/manual/en/langref.php).
 *
 * There you will find everything this lab will go through and much more.
 *
 */


/** -------------------------------------------------------------------
 * Section 1 . Arrays - with numeric index
 *
 *
 *
 */


/**
 * Exercise 1.1 (1 points)
 *
 * Create an array, called `countries` with the items: `[Ireland, Hungary,
 * Denmark]`.
 *
 * Answer with the second item in the array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$countries = ["Ireland", "Hungary", "Denmark"];


$ANSWER = $countries[1];

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.1", $ANSWER, false);

/**
 * Exercise 1.2 (1 points)
 *
 * Create a new array called `capitals` with the items: `[Dublin, Budapest,
 * Copenhagen]`.
 *
 * Answer with a string containing each country from the `countries`-array
 * followed by the corresponding capital. Use the format `"country = capital,
 * country = capital..."`
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$capitals = ["Dublin", "Budapest", "Copenhagen"];

$countryAndCapital = "";
for ($idx = 0; $idx < count($countries); $idx ++) {
    $countryAndCapital .= $countries[$idx] . " = " . $capitals[$idx] . ", ";
}

$ANSWER = trim($countryAndCapital, ", ");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.2", $ANSWER, false);

/**
 * Exercise 1.3 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[499, 98, 21.63, 5,
 * 9855]`. Answer with the sum of the first two items.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1 = [499, 98, 21.63, 5, 9855];

$sumOfFirstTwo = $numbers1[0] + $numbers1[1];

$ANSWER = $sumOfFirstTwo;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.3", $ANSWER, false);

/**
 * Exercise 1.4 (1 points)
 *
 * Use your arrays `numbers1` and `capitals` to change item at index 4 in
 * `numbers1` to the item at index 0 in `capitals`. Answer with the array
 * `numbers1`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$numbers1[4] = $capitals[0];

$ANSWER = $numbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.4", $ANSWER, false);

/**
 * Exercise 1.5 (1 points)
 *
 * Use your array `countries` and concatenate the first and the last item as a
 * string. Separate the items with a hyphen `-` and answer with the result.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$firstAndLastOfCountries = $countries[0] . "-" . $countries[count($countries) - 1];
$ANSWER = $firstAndLastOfCountries;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("1.5", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 2 . Arrays - with keys
 *
 *
 *
 */


/**
 * Exercise 2.1 (1 points)
 *
 * Use your `countries` and `capitals` arrays and create another array called
 * `keyArray`. The country should be the key and the capital should be the
 * value. Answer with the new array. (hint: `"country" => "capital"`)
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$keyArray = [];
for ($idx = 0; $idx < count($countries); $idx ++) {
    $keyArray[$countries[$idx]] = $capitals[$idx];
}

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.1", $ANSWER, false);

/**
 * Exercise 2.2 (1 points)
 *
 * Add the key `"Jamaica"` with the value `"Kingston"` to your `keyArray`.
 * Answer with the updated array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$keyArray["Jamaica"] = "Kingston";

$ANSWER = $keyArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.2", $ANSWER, false);

/**
 * Exercise 2.3 (1 points)
 *
 * Answer with the value for the key `"Denmark"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$valueOfDenmark = $keyArray["Denmark"];

$ANSWER = $valueOfDenmark;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("2.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 3 . Arrays - built-in functions
 *
 *
 *
 */


/**
 * Exercise 3.1 (1 points)
 *
 * Find the number of items in the array `[522, 87, 54.98, 3, 6533]`. Answer
 * with the result as an integer.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$array = [522, 87, 54.98, 3, 6533];
$itemsInArray = count($array);

$ANSWER = $itemsInArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.1", $ANSWER, false);

/**
 * Exercise 3.2 (1 points)
 *
 * Sort the array `[522, 87, 54.98, 3, 6533]` in decending order. Make sure
 * that it does maintain the key association. Answer with the sorted array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
arsort($array, SORT_NUMERIC);

$ANSWER = $array;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.2", $ANSWER, false);

/**
 * Exercise 3.3 (1 points)
 *
 * Use `pop()` on the array `[522, 87, 54.98, 3, 6533]` and answer with the
 * popped item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$array2 = [522, 87, 54.98, 3, 6533];
$poppedItem = array_pop($array2);

$ANSWER = $poppedItem;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.3", $ANSWER, false);

/**
 * Exercise 3.4 (1 points)
 *
 * Use `push()` on the array `[499, 98, 21.63, 5, 9855]` and insert the number
 * 56. Answer with the resulting array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$array3 = [499, 98, 21.63, 5, 9855];
array_push($array3, 56);
$ANSWER = $array3;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.4", $ANSWER, false);

/**
 * Exercise 3.5 (1 points)
 *
 * Copy your array `countries` to a new array called `newArray`. Use `shift()`
 * on the new array and answer with the shifted item.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$newArray = &$countries;

$item = array_shift($newArray);

$ANSWER = $item;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.5", $ANSWER, false);

/**
 * Exercise 3.6 (1 points)
 *
 * Use `unshift()` on your `newArray` add the items `"Oregon"` and `"Wyoming"`
 * in the beginning of the array. Answer with the modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

array_unshift($newArray, "Oregon", "Wyoming");

$ANSWER = $newArray;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.6", $ANSWER, true);

/**
 * Exercise 3.7 (1 points)
 *
 * Reverse the order of the array `[522, 87, 54.98, 3, 6533]`. Answer with the
 * modified array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$array4 = [522, 87, 54.98, 3, 6533];
$reversedArray4 = array_reverse($array4, false);

$ANSWER = $reversedArray4;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.7", $ANSWER, false);

/**
 * Exercise 3.8 (1 points)
 *
 * Use `implode()` on your `capital`-array and answer with a string where each
 * item is separated by a hyphen `-`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

$capitalString = implode("-", $capitals);
$ANSWER = $capitalString;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("3.8", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 4 . Arrays - for-each loop
 *
 *
 *
 */


/**
 * Exercise 4.1 (1 points)
 *
 * Create an array, called `numbers1` with the items: `[11, 4, 41, 67, 99, 22,
 * 8, 83, 5, 16]`. Use a for-each loop to sum each item with 16 and put them
 * in a new array called `summedNumbers1`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers1 = [11, 4, 41, 67, 99, 22, 8, 83, 5, 16];
$summedNumbers1 = [];
foreach ($numbers1 as $number) {
    $summedNumbers1[] = $number + 16;
}

$ANSWER = $summedNumbers1;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.1", $ANSWER, false);

/**
 * Exercise 4.2 (1 points)
 *
 * Create a new array called `numbers2` with the items `[10, 3, 45, 98, 4, 7,
 * 56, 23, 3, 1]`. Use at least a for-each loop to add all numbers larger than
 * 20 to a new array called `largeNumbers`. Answer with the new array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$numbers2 = [10, 3, 45, 98, 4, 7, 56, 23, 3, 1];
$largeNumbers = [];

foreach ($numbers2 as $number) {
    if ($number > 20) {
        $largeNumbers[] = $number;
    }
}
$ANSWER = $largeNumbers;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.2", $ANSWER, false);

/**
 * Exercise 4.3 (1 points)
 *
 * Create an array with the keys: `"one"`, `"two"`, `"three"`, `"four"` and
 * `"five"` and the values: 1, 2, 3, 4, 5. Use a foreach-loop to add all keys
 * and values to an array in the format: `["key"=value, "key"=value, etc]`.
 * Use `implode()` to make the answer a string with all items separated by a
 * comma `,`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$pairArray = [
    "one"   => 1,
    "two"   => 2,
    "three" => 3,
    "four"  => 4,
    "five"  => 5,
];
$formatArray = [];
foreach ($pairArray as $key => $value) {
    $formatArray[] = $key . "=" . $value;
}
$numberValues = implode(",", $formatArray);

$ANSWER = trim($numberValues, ",");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("4.3", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 5 . Switch-case
 *
 * [PHP Manual about
 * switch](http://se1.php.net/manual/en/control-structures.switch.php)
 *
 */


/**
 * Exercise 5.1 (1 points)
 *
 * Create a switch-case statement to decide which continent a certain country
 * resides in. Use the countries: `"Sweden, Brazil, China, Australia, Canada"`
 * and the continents:
 *     `"Europe, South America, Asia, Oceania, North America"`.
 *
 * Answer with a test on the country: `"Brazil"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$countries = explode(", ", "Sweden, Brazil, China, Australia, Canada");


function getContinent(string $country): string
{
    switch ($country) {
        case "Sweden":
            return "Europe";
        case "Brazil":
            return "South America";
        case "China":
            return "Asia";
        case "Austrialia":
            return "Oceania";
        case "Canada":
            return "North America";
        default:
            return null;

    }
}

$ANSWER = getContinent("Brazil");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("5.1", $ANSWER, false);

/** -------------------------------------------------------------------
 * Section 6 . Extra assignments
 *
 * These questions are worth 3 points each. Solve them for extra points.
 *
 */


/**
 * Exercise 6.1 (3 points)
 *
 * A switch-case statement can handle multiple cases with the same result.
 * Create a new switch-case statement that decides which is the corresponding
 * continent. Use the countries: `"Sweden, Denmark, Finland, Brazil, China,
 * Australia, Canada"` and the continents: `"Europe, South America, Asia,
 * Oceania, North America"`.
 *
 * Answer with a test on the country: `"Sweden"`.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */

function getContinentMultiCase(string $country): string
{
    switch ($country) {
        case "Sweden":
        case "Denmark":
        case "Finland":
            return "Europe";
        case "Brazil":
            return "South America";
        case "China":
            return "Asia";
        case "Australia":
            return "Oceania";
        case "Canada":
            return "North America";
        default:
            return null;

    }
}

$ANSWER = getContinent("Sweden");

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.1", $ANSWER, false);

/**
 * Exercise 6.2 (3 points)
 *
 * Sort the array `[499, 98, 21.63, 5, 9855]` in ascending order. Make sure
 * that it does not maintain the key association. Answer with the sorted
 * array.
 *
 * Write your code below and put the answer into the variable ANSWER.
 */
$arrayToSort = [499, 98, 21.63, 5, 9855];
sort($arrayToSort, SORT_NUMERIC);


$ANSWER = $arrayToSort;

// I will now test your answer - change false to true to get a hint.
echo $dbwebb->assertEqual("6.2", $ANSWER, false);


// Wrap it up
exit($dbwebb->exitWithSummary());
