<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use Maximaster\BitrixEnums\Main\TaskNameEnum;

/**
 * Перечень системных уровней доступа к модулю "Информационные блоки".
 *
 * @method static self DENY()
 * @method static self READ()
 * @method static self ELEMENT_ADD()
 * @method static self ADMIN_READ()
 * @method static self ADMIN_ADD()
 * @method static self LIMITED_EDIT()
 * @method static self FULL_EDIT()
 * @method static self FULL()
 */
class TaskName extends TaskNameEnum
{
    /**
     * @return class-string<TaskLetter>
     */
    public static function letterClass()
    {
        return TaskLetter::class;
    }

    /** @const string Доступ к инфоблоку запрещен */
    public const DENY = 'iblock_deny';

    /** @const string Просмотр элементов и разделов инфоблока в публичной части */
    public const READ = 'iblock_read';

    /** @const string Добавление элементов инфоблока */
    public const ELEMENT_ADD = 'iblock_element_add';

    /** @const string Просмотр элементов и разделов в административной части */
    public const ADMIN_READ = 'iblock_admin_read';

    /** @const string Добавление элементов инфоблока в административной части */
    public const ADMIN_ADD = 'iblock_admin_add';

    /** @const string Редактирование элементов с учетом статусов документооборота и запуском бизнес-процессов */
    public const LIMITED_EDIT = 'iblock_limited_edit';

    /** @const string Редактирование элементов и разделов, но без возможности настроить права доступа */
    public const FULL_EDIT = 'iblock_full_edit';

    /** @const string Редактирование инфоблоков, элементов и разделов без ограничений */
    public const FULL = 'iblock_full';
}
