<?php


include 'config.php';
include 'libs/iBand.php';
include 'libs/iInstrument.php';
include 'libs/iMusician.php';
include 'libs/Instrument.php';
include 'libs/Musician.php';
include 'libs/Band.php';


$instrument1 = new Instrument();
$instrument1->setName('Bass guitar');
$instrument1->setCategory('Stringed');

$instrument2 = new Instrument();
$instrument2->setName('Electric guitar');
$instrument2->setCategory('Stringed');

$instrument3 = new Instrument();
$instrument3->setName('Drumkit');
$instrument3->setCategory('Drum');

$instrument4 = new Instrument();
$instrument4->setName('Harmonica');
$instrument4->setCategory('Aerophone');


//band 1
$member1Weedeather = new Musician();
$member1Weedeather->addInstrument($instrument1);
$member1Weedeather->setMember('Dave Collins', 'Bass, vocal', true);

$member2Weedeather = new Musician();
$member2Weedeather->addInstrument($instrument2);
$member2Weedeather->setMember('Dave Shepherd', 'Electric guitar', false);

$member3Weedeather = new Musician();
$member3Weedeather->addInstrument($instrument3);
$member3Weedeather->setMember('Travis Owen', 'Drumkit', false);



$weedeather = new Band();
$weedeather->setName('Weedeater');
$weedeather->setGenre('Sludge');
$member1Weedeather->assingToBand($weedeather);
$member2Weedeather->assingToBand($weedeather);
$member3Weedeather->assingToBand($weedeather);

$weedeatherName = $weedeather->getName();
$weedeatherGenre = $weedeather->getGenre();
$weedeatherMembers = $weedeather->getMusician();




//band 2
$member1Zeppelin = new Musician();
$member1Zeppelin->addInstrument($instrument4);
$member1Zeppelin->setMember('Robert Plant', 'Vocal', true);

$member2Zeppelin = new Musician();
$member2Zeppelin->addInstrument($instrument2);
$member2Zeppelin->setMember('Jimmy Page', 'Electric guitar', false);

$member3Zeppelin = new Musician();
$member3Zeppelin->addInstrument($instrument1);
$member3Zeppelin->setMember('John Paul Jones', 'Bass', false);

$member4Zeppelin = new Musician();
$member4Zeppelin->addInstrument($instrument3);
$member4Zeppelin->setMember('John Bonham', 'Drumkit', false);



$zeppelin = new Band();
$zeppelin->setName('Led Zeppelin');
$zeppelin->setGenre('Hard rock, Blues rock');
$member1Zeppelin->assingToBand($zeppelin);
$member2Zeppelin->assingToBand($zeppelin);
$member3Zeppelin->assingToBand($zeppelin);
$member4Zeppelin->assingToBand($zeppelin);

$zeppelinName = $zeppelin->getName();
$zeppelinGenre = $zeppelin->getGenre();
$zeppelinMembers = $zeppelin->getMusician();


include 'templates/index_tmpl.php';