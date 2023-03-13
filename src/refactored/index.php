<?php

include_once 'model/costumer.php';
include_once 'facade/costumer_facade.php';

$costumer = new Costumer(
	'Dyandro Ivyson',
	'dyandro',
	'dyandro@test.com'
);

CostumerFacade::removeAccount($costumer);
