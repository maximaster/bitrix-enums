<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * @method static self MALE()
 * @method static self FEMALE()
 */
class Gender extends Enum
{
    public const MALE = 'M';
    public const FEMALE = 'F';
}
