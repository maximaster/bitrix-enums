<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Составные части фильтра со сложной логикой.
 *
 * @method static self LOGIC()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class FilterKey extends Enum
{
    /**
     * Связывающее условие.
     */
    public const LOGIC = 'LOGIC';
}
