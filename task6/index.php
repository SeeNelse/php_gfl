<?php


include 'config.php';
include 'libs/iBand.php';
include 'libs/iInstrument.php';
include 'libs/iMusician.php';
include 'libs/Instrument.php';
include 'libs/Musician.php';
include 'libs/Band.php';


$instrumentBass = new Instrument();
$instrumentBass->setName('Bass guitar');
$instrumentBass->setCategory('Stringed');

$instrumentGuitar = new Instrument();
$instrumentGuitar->setName('Electric guitar');
$instrumentGuitar->setCategory('Stringed');

$instrumentDrum = new Instrument();
$instrumentDrum->setName('Drumkit');
$instrumentDrum->setCategory('Drum');

$instrumentHarmonica = new Instrument();
$instrumentHarmonica->setName('Harmonica');
$instrumentHarmonica->setCategory('Aerophone');




//band 1
$member1Weedeather = new Musician();
$member1Weedeather->addInstrument($instrumentBass);
$member1Weedeather->setMember('Dave Collins', 'Bass, vocal', true);

$member2Weedeather = new Musician();
$member2Weedeather->addInstrument($instrumentGuitar);
$member2Weedeather->setMember('Dave Shepherd', 'Electric guitar', false);

$member3Weedeather = new Musician();
$member3Weedeather->addInstrument($instrumentDrum);
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
$member1Zeppelin->addInstrument($instrumentHarmonica);
$member1Zeppelin->setMember('Robert Plant', 'Vocal', true);

$member2Zeppelin = new Musician();
$member2Zeppelin->addInstrument($instrumentGuitar);
$member2Zeppelin->setMember('Jimmy Page', 'Electric guitar', false);

$member3Zeppelin = new Musician();
$member3Zeppelin->addInstrument($instrumentBass);
$member3Zeppelin->setMember('John Paul Jones', 'Bass', false);

$member4Zeppelin = new Musician();
$member4Zeppelin->addInstrument($instrumentDrum);
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