<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Список флагов хранения значений свойств элементов инфоблока.
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 *
 * @method static self FIRST()
 * @method static self SECOND()
 */
class IblockVersion extends Enum
{
    /** В общей таблице. */
    public const FIRST = 1;

    /** В отдельной таблице. */
    public const SECOND = 2;
}
