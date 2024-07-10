<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Sale;

use MyCLabs\Enum\Enum;

/**
 * @method static self NEW()
 * @method static self FINISHED()
 */
class OrderStatus extends Enum
{
    public const NEW = 'N';
    public const FINISHED = 'F';
}
