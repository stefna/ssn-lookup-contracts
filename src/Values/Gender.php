<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Values;

use Sunkan\Enum\Enum;

/**
 * @method static Gender MAN()
 * @method static Gender WOMAN()
 */
final class Gender extends Enum
{
	public const MAN = '1';
	public const WOMAN = '2';
}
