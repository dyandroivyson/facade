<?php

class Costumer
{
	public function __construct(
		public readonly string $name,
		public readonly string $user,
		public readonly string $email,
	) {	
	}
}
