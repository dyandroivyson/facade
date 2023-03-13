<?php

include_once 'costumer.php';

class DocumentsCostumer
{
	public function __construct(
		private readonly Costumer $costumer,
	) {
	}
	
	public function delete(): bool
	{
		echo "Documents from {$this->costumer->name} deleted!<br>";
		
		return true;
	}
}
