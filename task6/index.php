<?php


include 'config.php';
include 'libs/iBand.php';
include 'libs/iInstrument.php';
include 'libs/iMusician.php';
include 'libs/Instrument.php';
include 'libs/Musician.php';
include 'libs/Band.php';

$instrument = new Instrument();
$member = new Musician();


$instrument->setName('Guitar');
$instrument->setCategory('Stringed instrument');


$member->addInstrument($instrument);


$instrument->setName('Bass');
$instrument->setCategory('Stringed instrument');

$member->addInstrument($instrument);

include 'templates/index_tmpl.php';