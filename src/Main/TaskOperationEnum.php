<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Список операций уровня доступа модуля.
 *
 * @extends Enum<non-empty-string>
 *
 * @template TaskName of TaskNameEnum
 */
abstract class TaskOperationEnum extends Enum
{
    /**
     * @return class-string<TaskNameEnum>
     *
     * @psalm-return class-string<TaskName>
     */
    abstract public static function nameClass();
}
