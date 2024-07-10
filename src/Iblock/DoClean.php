<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Значения параметра @see SettableRightsKey::DO_CLEAN.
 *
 * @method static self YES()
 * @method static self NO()
 * @method static self NOT()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class DoClean extends Enum
{
    public const YES = 'Y';
    public const NO = 'N';
    public const NOT = 'NOT';
}
