<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Entities;

final class SimpleAddress implements Address
{
	private string $zipCode;
	private string $city;
	private string $address;

	public function __construct(string $city, string $zipCode, string $address)
	{
		$this->city = $city;
		$this->zipCode = $zipCode;
		$this->address = $address;
	}

	public function getZipCode(): string
	{
		return $this->zipCode;
	}

	public function getCity(): string
	{
		return $this->city;
	}

	public function getStreetAddress(): string
	{
		return $this->address;
	}
}
