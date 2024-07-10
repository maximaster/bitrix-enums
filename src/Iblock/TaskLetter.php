<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use Maximaster\BitrixEnums\Main\TaskLetterEnum;

/**
 * Перечень букв уровней достувпа к модулю "Информационные блоки".
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
class TaskLetter extends TaskLetterEnum
{
    /**
     * @return class-string<TaskName>
     */
    public static function nameClass()
    {
        return TaskName::class;
    }

    /** @const string Доступ к инфоблоку запрещен */
    public const DENY = 'D';

    /** @const string Просмотр элементов и разделов инфоблока в публичной части */
    public const READ = 'R';

    /** @const string Добавление элементов инфоблока */
    public const ELEMENT_ADD = 'E';

    /** @const string Просмотр элементов и разделов в административной части */
    public const ADMIN_READ = 'S';

    /** @const string Добавление элементов инфоблока в административной части */
    public const ADMIN_ADD = 'T';

    /** @const string Редактирование элементов с учетом статусов документооборота и запуском бизнес-процессов */
    public const LIMITED_EDIT = 'U';

    /** @const string Редактирование элементов и разделов, но без возможности настроить права доступа */
    public const FULL_EDIT = 'W';

    /** @const string Редактирование инфоблоков, элементов и разделов без ограничений */
    public const FULL = 'X';
}
