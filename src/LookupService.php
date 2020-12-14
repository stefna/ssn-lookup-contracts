<?php declare(strict_types=1);

namespace Stefna\SsnLookup;

use Stefna\SsnLookup\Entities\Person;
use Stefna\SsnLookup\Exceptions\SsnLookupException;
use Stefna\SsnLookup\Values\Ssn;

interface LookupService
{
	/**
	 * @throws SsnLookupException
	 */
	public function lookup(Ssn $ssn): Person;
}
