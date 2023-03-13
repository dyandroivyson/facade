<?php

include_once 'model/costumer.php';
include_once 'model/avatar_costumer.php';
include_once 'model/documents_costumer.php';
include_once 'model/access_logs_costumer.php';
include_once 'model/costumer_service.php';
include_once 'model/email_costumer.php';

$costumer = new Costumer(
	'Dyandro Ivyson',
	'dyandro',
	'dyandro@test.com'
);

$avatarCostumer = new AvatarCostumer($costumer);
$documentsCostumer = new DocumentsCostumer($costumer);
$accessLogsCostumer = new AccessLogsCostumer($costumer);
$costumerService = new CostumerService($costumer);
$emailCostumer = new EmailCostumer($costumer);

$avatarCostumer->remove();
$documentsCostumer->delete();
$accessLogsCostumer->remove();
$costumerService->delete();
$emailCostumer->sendDeletedAccountEmail();
