<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Доступные направления сортировки.
 *
 * @method static self ASC()
 * @method static self DESC()
 */
class OrderDirection extends Enum
{
    public const ASC = 'asc';
    public const DESC = 'desc';
}
