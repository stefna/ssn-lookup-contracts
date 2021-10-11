<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Exceptions;

use Stefna\PersonContract\Values\Ssn;
use Throwable;

final class PersonNotFound extends \DomainException implements SsnLookupException
{
	/** @var Ssn */
	private $ssn;

	public function __construct(
		Ssn $ssn,
		string $message = "",
		int $code = 0,
		Throwable $previous = null
	) {
		parent::__construct($message ?: 'Person not found', $code, $previous);
		$this->ssn = $ssn;
	}

	public function getSsn(): Ssn
	{
		return $this->ssn;
	}
}
