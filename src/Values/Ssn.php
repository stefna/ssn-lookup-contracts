<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Values;

final class Ssn implements \JsonSerializable
{
	private string $ssn;

	public static function fromString(string $ssn): self
	{
		// todo validate ssn

		return new self($ssn);
	}

	private function __construct(string $ssn)
	{
		$this->ssn = $ssn;
	}

	public function toString(): string
	{
		return $this->ssn;
	}

	public function jsonSerialize()
	{
		return $this->ssn;
	}
}
