<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Выражения склейки фильтра.
 *
 * @method static self AND()
 * @method static self OR()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class Logic extends Enum
{
    public const AND = 'AND';
    public const OR = 'OR';
}
