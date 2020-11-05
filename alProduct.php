<?php
$products = [
  'product 1' => [
    'price' => '620',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ],
  'product 2' => [
    'price' => '6500',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ],
  'product 3' => [
    'price' => '620',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ],
  'product 4' => [
    'price' => '6500',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ],
  'product 5' => [
    'price' => '620',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ],
  'product 6' => [
    'price' => '6500',
    'img' => " <img src='imgs/2.jpg' >",
    'desc' => 'ay 7aga'
  ]
];


include('./first.php');
foreach ($products as $product => $value) {

  # code...

  echo '<div class="card bg-new" style="width: 18rem;">
        <div class="card-body container"><h5 class="card-titled-flex justify-content-between align-items-lg-start">';
  echo  $product . '</h5>';
  echo ' <h6 class="card-subtitle mb-2  ">';
  echo $value['img'] .  ' </h6>';
  echo '</div>';
  echo '<h6 class="card-subtitle mb-2 px-2   font-weight-bolder text-center">';
  echo   $value['price'] . '</h6>';
  echo '</div>';
  echo '<br>';

}
include("./second.php");
