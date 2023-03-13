<?php

include_once 'costumer.php';

class EmailCostumer
{
	public function __construct(
		private readonly Costumer $costumer,
	) {
	}
	
	public function sendDeletedAccountEmail(): bool
	{
		echo "Deleted account email send to {$this->costumer->name}<br>";
		
		return true;
	}
}
