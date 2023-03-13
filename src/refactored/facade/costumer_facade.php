<?php

include_once 'model/costumer.php';
include_once 'model/avatar_costumer.php';
include_once 'model/documents_costumer.php';
include_once 'model/access_logs_costumer.php';
include_once 'model/costumer_service.php';
include_once 'model/email_costumer.php';

class CostumerFacade
{
	public static function removeAccount(Costumer $costumer): void
	{
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
	}
}
