<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Перечень ключей, присутствующих в массивах прав доступа на сущности Битрикс.
 *
 * @method static self TASK_ID()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class RightsKey extends Enum
{
    public const TASK_ID = 'TASK_ID';
}
