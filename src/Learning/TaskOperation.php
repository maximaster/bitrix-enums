<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Learning;

use Maximaster\BitrixEnums\Main\TaskOperationEnum;

/**
 * Перечень операций для уровней доступа к модулю 'Обучение'.
 *
 * @extends TaskOperationEnum<TaskName>
 *
 * @method static self READ()
 * @method static self CREATE()
 * @method static self WRITE()
 * @method static self REMOVE()
 * @method static self LINK_TO_PARENTS()
 * @method static self UNLINK_FROM_PARENTS()
 * @method static self LINK_DESCENDANTS()
 * @method static self UNLINK_DESCENDANTS()
 * @method static self MANAGE_RIGHTS()
 */
class TaskOperation extends TaskOperationEnum
{
    /**
     * {@inheritDoc}
     *
     * @psalm-return class-string<TaskName>
     */
    public static function nameClass()
    {
        return TaskName::class;
    }

    /** Прочитать (просмотреть). */
    public const READ = 'lesson_read';

    /** Создать. */
    public const CREATE = 'lesson_create';

    /** Записать (редактировать). */
    public const WRITE = 'lesson_write';

    /** Удалить. */
    public const REMOVE = 'lesson_remove';

    /** Привязать к родителю. */
    public const LINK_TO_PARENTS = 'lesson_link_to_parents';

    /** Отвязать от родителя. */
    public const UNLINK_FROM_PARENTS = 'lesson_unlink_from_parents';

    /** Привязать потомков. */
    public const LINK_DESCENDANTS = 'lesson_link_descendants';

    /** Отвязать потомков. */
    public const UNLINK_DESCENDANTS = 'lesson_unlink_descendants';

    /** Управлять правами. */
    public const MANAGE_RIGHTS = 'lesson_manage_rights';
}
