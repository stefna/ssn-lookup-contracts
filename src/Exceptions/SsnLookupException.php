<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Exceptions;

use Stefna\PersonContract\Values\Ssn;

interface SsnLookupException extends \Throwable
{
	public function getSsn(): Ssn;
}
