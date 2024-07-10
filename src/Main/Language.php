<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * @extends Enum<string>
 *
 * @psalm-immutable
 *
 * @method static self RUSSIAN()
 * @method static self ENGLISH()
 */
class Language extends Enum
{
    public const RUSSIAN = 'ru';
    public const ENGLISH = 'en';
}
