<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

$age = 17;

// if($age >= 18) {
//   echo 'You are old enough to vote.';
// } else {
//   echo ' Sorry, you are not old enough to vote';
// }

$time = date("H");

// if($time < 12) {
//   echo 'Good morning.';
// } elseif ($time < 17) {
//   echo 'Good afternoon.';
// } else {
//   echo 'Good evening.';
// }

$posts = ['First Post'];

// if(!empty($posts)) {
//   echo $posts[0];
// } else {
//   echo 'No posts';
// }

// Ternary operator
// echo !empty($posts) ? $posts[0] : 'No posts';

// $first_post = !empty($posts) ? $posts[0] : 'No posts';

// coalescing operator
// $first_post = $posts[0] ?? null;

// echo $first_post;

// Switches
$fav_color = 'yellow';

switch($fav_color) {
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default: 
    echo 'Your favorite color is not red, green or blue';
}