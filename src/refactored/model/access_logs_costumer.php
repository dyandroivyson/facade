<?php

include_once 'costumer.php';

class AccessLogsCostumer
{
	public function __construct(
		private readonly Costumer $costumer,
	) {
	}
	
	public function remove(): bool
	{
		echo "Access logs from {$this->costumer->name} removed!<br>";
		
		return true;
	}
}
