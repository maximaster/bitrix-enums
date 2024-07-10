<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Базовый класс для перечислений букв уровней доступа.
 *
 * @extends Enum<non-empty-string>
 *
 * @template TaskName of TaskNameEnum
 */
abstract class TaskLetterEnum extends Enum
{
    /**
     * @return TaskNameEnum
     *
     * @psalm-return class-string<TaskName>
     */
    abstract public static function nameClass();

    /**
     * @return TaskNameEnum
     *
     * @psalm-return TaskName
     */
    public function toName()
    {
        return static::nameClass()::__callStatic($this->getKey(), []);
    }
}
