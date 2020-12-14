<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Exceptions;

use Throwable;

final class PersonNotFound extends \DomainException implements SsnLookupException
{
	public function __construct(string $message = "", int $code = 0, Throwable $previous = null)
	{
		parent::__construct($message ?: 'Person not found', $code, $previous);
	}
}
