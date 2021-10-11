<?php declare(strict_types=1);

namespace Stefna\SsnLookup;

use Stefna\PersonContract\Values\Ssn;
use Stefna\SsnLookup\Entities\Person;
use Stefna\SsnLookup\Exceptions\SsnLookupException;

interface LookupService
{
	/**
	 * @throws SsnLookupException
	 */
	public function lookup(Ssn $ssn): Person;
}
