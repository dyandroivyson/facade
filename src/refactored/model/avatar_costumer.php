<?php

include_once 'costumer.php';

class AvatarCostumer
{
	public function __construct(
		private readonly Costumer $costumer,
	) {
	}
	
	public function remove(): bool
	{
		echo "Avatar from {$this->costumer->name} removed!<br>";
		
		return true;
	}
}
