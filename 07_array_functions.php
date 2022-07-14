<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/
  $fruits = ['apple', 'orange', 'pear'];

  // Get length
  // echo count($fruits);

  // Search array
  // var_dump(in_array('apple', $fruits));

  // Add to array
  $fruits[] = 'grape';
  // Add to end
  array_push($fruits, 'blueberry', 'strawberry');
  // Add to beginning
  array_unshift($fruits, 'mango');
  
  // Remove from array
  // Remove from beginning
  array_pop($fruits); // strawberry
  // Remove from end
  array_shift($fruits); // mango
  // Remove a specifc one, also removes the index specifically
  // unset($fruits[2]); // pear

  // Split array into chunks of 2
  // $chunked_array = array_chunk($fruits, 2);
  // print_r($chunked_array);

  // print_r($fruits);

  // Merge arrays
  $arr1 = [1,2,3];
  $arr2 = [4,5,6];
  // With a function
  $arr3 = array_merge($arr1, $arr2);
  // With the spread operator
  $arr4 = [...$arr1, ...$arr2];
  // With combine, takes the first array and makes those keys and the second array as values
  $a =['green', 'red', 'yellow'];
  $b = ['avocado', 'apple', 'banana'];
  $c = array_combine($a, $b);
  // print_r($c);

  // Get an array of the keys within an array
  $keys = array_keys($c);
  // print_r($keys);

    // Flip the array, make the keys the values and the values the keys
    $flipped = array_flip($c);
    // print_r($flipped);

    // Range function to create an array with a range of numbers
    $numbers = range(1, 20);
    // print_r($numbers);

    // Create a new array using map
    // array_map takes in a function which returns something, has a parameter of something ($number in this case) and then the array you wish to map over
    $new_numbers = array_map(function($number) {
      return "Number ${number}";
    }, $numbers);
    // print_r($new_numbers);

    // Array filter will strip out certain parts of the array
    $less_than_10 = array_filter($numbers, fn($number) => $number <= 10);
    // print_r($less_than_10);

    // Reduce will add the numbers together
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);

    var_dump($sum);