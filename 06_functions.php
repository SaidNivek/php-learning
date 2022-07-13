<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope

/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registerUser($email) {
  echo "$email registered";
}

// registerUser('kevin@gmail.com');
// Can use default values with the = after the params
function sum($n1 = 0, $n2 = 0) {
  return $n1 + $n2;
}

$num = sum();
// echo $num;

// Anonymous function
$subtract = function($n1, $n2) {
  return $n1 - $n2;
};

// echo $subtract(10, 5);

// Arrow function syntax, with only one line of code
$multiply = fn($n1, $n2) => $n1 * $n2;
echo $multiply(9,9);