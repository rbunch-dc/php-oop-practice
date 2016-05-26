<?php

require_once('classes/plant.class.php');

$poison_ivy = new Plant();
$poison_ivy->setFamily('Cashew');
$poison_ivy->setGenus('Toxicodendrun');
$poison_ivy->setSpecies('Radican');
$poison_ivy->setDist('North America');

print $poison_ivy->renderPlant();
