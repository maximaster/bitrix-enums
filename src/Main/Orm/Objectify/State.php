<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm\Objectify;

use MyCLabs\Enum\Enum;

/**
 * Перечень состояний объекта.
 *
 * @extends Enum<int>
 *
 * @method static self RAW()
 * @method static self ACTUAL()
 * @method static self CHANGED()
 */
class State extends Enum
{
    public const RAW = 0;
    public const ACTUAL = 1;
    public const CHANGED = 2;
}
