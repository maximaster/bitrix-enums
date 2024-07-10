<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm;

use MyCLabs\Enum\Enum;

/**
 * Тип слиятия таблиц для reference-полей.
 *
 * @method static self LEFT()
 * @method static self INNER()
 * @method static self RIGHT()
 */
class JoinType extends Enum
{
    public const LEFT = 'LEFT';
    public const INNER = 'INNER';
    public const RIGHT = 'RIGHT';
}
