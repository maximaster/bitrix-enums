<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use Maximaster\BitrixEnums\Main\TaskLetterEnum;

/**
 * Перечень букв системных уровней доступа к модулю "Диск".
 *
 * @method static self READ()
 * @method static self ADD()
 * @method static self EDIT()
 * @method static self SHARING()
 * @method static self FULL()
 *
 * @psalm-immutable
 */
class TaskLetter extends TaskLetterEnum
{
    /**
     * @return class-string<TaskName>
     */
    public static function nameClass()
    {
        return TaskName::class;
    }

    /**
     * Чтение.
     */
    public const READ = 'R';

    /**
     * Добавление.
     */
    public const ADD = 'T';

    /**
     * Редактирование.
     */
    public const EDIT = 'W';

    /**
     * Делиться.
     */
    public const SHARING = 'S';

    /**
     * Полный доступ.
     */
    public const FULL = 'X';

    public function toName(): TaskName
    {
        return TaskName::__callStatic($this->getKey(), []);
    }
}
