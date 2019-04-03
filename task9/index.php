<?php

include 'config.php';
include 'libs/Helper.php';

$selectArr = ['select1', 'select2', 'select3'];
$tableArr = [
  'thead' => [
    '№',
    'Book',
    'Description',
    'Price',
  ],
  'tbody' => [
    1 => [
      1,
      'Book1',
      'Lorem ipsum',
      '100 $',
    ],
    2 => [
      2,
      'Book2',
      'Lorem ipsum',
      '200 $',
    ],
    3 => [
      3,
      'Book3',
      'Lorem ipsum',
      '300 $',
    ],
  ],
  'tfoot' => [
    'colspan' => [
      'result:',
      3,
    ],
    '600 $'
  ]
];
$listArr = ['item1','item2','item3','item4'];
$descrArr = [
  'Description 1' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras velit nunc, luctus eget finibus sed, tincidunt at tortor. Sed ut molestie enim. Quisque pellentesque odio non nisi elementum pharetra',
  'Description 2' => 'Suspendisse egestas, quam sed auctor scelerisque, massa elit consectetur metus, vitae facilisis tortor orci non justo. Praesent volutpat quam tortor, at interdum massa scelerisque at.',
];
$inputsArr = ['Input 1','Input 2', 'Input 3'];

$helper = new Helper();
$selectMulti = $helper->select($selectArr);
$select = $helper->select($selectArr, false);
$table = $helper->table($tableArr);
$list = $helper->lists($listArr);
$descr = $helper->descr($descrArr);
$inputsRadio = $helper->inputs($inputsArr);
$inputsCheck = $helper->inputs($inputsArr, "checkbox");

echo $selectMulti;
echo '<br>';
echo $select;
echo '<br>';
echo $table;
echo '<br>';
echo $list;
echo '<br>';
echo $descr;
echo '<br>';
echo $inputsRadio;
echo '<br>';
echo $inputsCheck;