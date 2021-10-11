<?php declare(strict_types=1);

namespace Stefna\SsnLookup\Entities;

use Stefna\PersonContract\Entities\PersonWithAddress;
use Stefna\PersonContract\Entities\PersonWithDoB;
use Stefna\PersonContract\Entities\Person as BasePerson;

interface Person extends BasePerson, PersonWithAddress, PersonWithDoB
{
}
