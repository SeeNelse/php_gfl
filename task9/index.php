<?php

include 'config.php';
include 'libs/Helper.php';


$selectArr = ['bread', 'milk', 'tomatoes', 'the juice', 'biscuit', 'meat', 'cheese', 'cucumbers', ];
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
  'Description 1' => 'Donec a auctor orci. Phasellus id eros enim. Aenean sit amet lectus eros. Nullam sapien neque, facilisis et scelerisque sit amet, blandit nec urna. Aliquam pharetra urna commodo fermentum sodales. Vestibulum sagittis nisl rutrum enim aliquet rhoncus. Sed dui ante, placerat eget libero at, tincidunt varius nunc. Nulla facilisi. Suspendisse potenti. Etiam sagittis dictum mauris nec aliquet. Phasellus suscipit mi vitae nisi lacinia pretium. Quisque in suscipit ligula.',
  'Description 2' => 'Morbi ullamcorper ante non velit rutrum consectetur. Cras orci libero, congue et nunc sit amet, placerat hendrerit orci. In hac habitasse platea dictumst. Sed ut porttitor justo. Phasellus vel tincidunt erat. Phasellus varius pretium semper. Nullam et ligula vel felis ultrices rutrum. Aliquam maximus tincidunt volutpat. In sed vehicula mauris. Proin sodales elit quis posuere tincidunt.',
];
$inputsArr = ['Input 1','Input 2', 'Input 3'];

$htmlHelper = new Helper();
$selectMulti = $htmlHelper->select($selectArr, 'multiple', 8);
$selectRegular = $htmlHelper->select($selectArr, false);
$table = $htmlHelper->table($tableArr);
$listUl = $htmlHelper->lists($listArr);
$listOl = $htmlHelper->lists($listArr, 'ol');
$descr = $htmlHelper->descr($descrArr);
$inputsRadio = $htmlHelper->inputs($inputsArr);
$inputsCheck = $htmlHelper->inputs($inputsArr, "checkbox");


include 'templates/index_template.php';