<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Entities;

interface Address
{
	public function getZipCode(): string;

	public function getCity(): string;

	public function getStreetAddress(): string;
}
