<?php

include_once 'costumer.php';

class CostumerService
{
	public function __construct(
		private readonly Costumer $costumer,
	) {
	}
	
	public function delete(): bool
	{
		echo "{$this->costumer->name} removed from database!<br>";
		
		return true;
	}
}
