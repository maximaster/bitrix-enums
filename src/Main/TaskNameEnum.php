<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Базовый класс для перечислений имён уровней доступа.
 *
 * @extends Enum<non-empty-string>
 *
 * @template TaskLetter of TaskLetterEnum
 */
abstract class TaskNameEnum extends Enum
{
    /**
     * @return TaskLetterEnum
     *
     * @psalm-return class-string<TaskLetter>
     */
    abstract public static function letterClass();

    /**
     * @return TaskLetterEnum
     *
     * @psalm-return TaskLetter
     */
    public function toLetter()
    {
        return static::letterClass()::__callStatic($this->getKey(), []);
    }
}
