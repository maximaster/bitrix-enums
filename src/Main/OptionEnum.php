<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Список опций определённого модуля.
 *
 * @extends Enum<non-empty-string>
 */
abstract class OptionEnum extends Enum
{
    /**
     * Модуль к которому относится список опций.
     */
    abstract public static function module(): ModuleId;
}
