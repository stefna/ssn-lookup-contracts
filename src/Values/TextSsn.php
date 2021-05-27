<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Values;

/**
 * Simple representation of a SSN
 *
 * This one should only be used when you don't know anything about the ssn
 * otherwise please create a more specific class that includes validation
 * logic for that ssn
 */
class TextSsn implements Ssn, \JsonSerializable
{
	/** @var string */
	private $ssn;

	public static function fromString(string $ssn): self
	{
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
