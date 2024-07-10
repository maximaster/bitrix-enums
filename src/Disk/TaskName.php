<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use Maximaster\BitrixEnums\Main\TaskNameEnum;

/**
 * Перечень системных уровней доступа к модулю "Диск".
 *
 * @method static self READ()
 * @method static self ADD()
 * @method static self EDIT()
 * @method static self SHARING()
 * @method static self FULL()
 *
 * @psalm-immutable
 */
final class TaskName extends TaskNameEnum
{
    /**
     * @return class-string<TaskLetter>
     *
     * @psalm-return class-string<TaskLetter>
     */
    public static function letterClass()
    {
        return TaskLetter::class;
    }

    /**
     * Чтение.
     */
    public const READ = 'disk_access_read';

    /**
     * Добавление.
     */
    public const ADD = 'disk_access_add';

    /**
     * Редактирование.
     */
    public const EDIT = 'disk_access_edit';

    /**
     * Делиться.
     */
    public const SHARING = 'disk_access_sharing';

    /**
     * Полный доступ.
     */
    public const FULL = 'disk_access_full';
}
