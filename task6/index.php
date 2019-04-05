<?php


include 'config.php';
include 'libs/iBand.php';
include 'libs/iInstrument.php';
include 'libs/iMusician.php';
include 'libs/Instrument.php';
include 'libs/Musician.php';
include 'libs/Band.php';


$instrument1 = new Instrument();
$instrument1->setName('Bass');
$instrument1->setCategory('Stringed');

$instrument2 = new Instrument();
$instrument2->setName('Electric guitar');
$instrument2->setCategory('Stringed');

$instrument3 = new Instrument();
$instrument3->setName('Drumkit');
$instrument3->setCategory('Drum');



$member1 = new Musician();
$member1->addInstrument($instrument1);
$member1->setMember('Dave collins', 'Bass guitar, vocal', true);


$member2 = new Musician();
$member2->addInstrument($instrument2);
$member2->setMember('Dave Shepherd', 'Electric guitar', false);


$member3 = new Musician();
$member3->addInstrument($instrument2);
$member3->setMember('Travis Owen', 'Drumkit', false);

$weedeather = new Band();
$weedeather->addMusician($member1);
$weedeather->addMusician($member2);
$weedeather->addMusician($member3);

include 'templates/index_tmpl.php';