<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Entities;

use Stefna\SsnLookup\Values\Gender;
use Stefna\SsnLookup\Values\Ssn;

interface Person
{
	public function getGender(): Gender;

	public function getName(): string;

	public function getSsn(): Ssn;

	public function getAddress(): Address;

	public function getMunicipalCode(): string;

	public function getDateOfBirth(): \DateTimeImmutable;
}
