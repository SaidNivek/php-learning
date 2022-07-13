<?php
/* ----------- Arrrays ----------- */

/*
  Arrays hold multiple values. Each value in an array is called an "element"
*/

// Simple Array
  // $numbers = [1,44,55,22];
  // $fruits = array('apple', 'orange', 'pear');

  // print_r($numbers);
  // var_dump($numbers);
  // echo $fruits[1];

  // Associative Array, can assign the index to the value associated with it
  $colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
  ];

  // echo $colors[4];

  $hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '00f'
  ];

  // echo $hex['blue'];

  $person = [
    'first_name' => 'Kevin',
    'last_name' => 'Dias',
    'email' => 'kevin@gmail.com'
  ];

  // echo $person['first_name'];

  $people = [
    [
      'first_name' => 'Kevin',
      'last_name' => 'Dias',
      'email' => 'kevin@gmail.com'
    ],
    [
      'first_name' => 'Adam',
      'last_name' => 'Simonelli',
      'email' => 'adam@gmail.com'
    ],
    [
      'first_name' => 'Jillian',
      'last_name' => 'Dunn',
      'email' => 'jillian@gmail.com'
    ]
  ];

  // echo $people[1]['email'];
  var_dump(json_encode($people));
?>