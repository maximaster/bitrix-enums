<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use Maximaster\BitrixEnums\Main\TaskOperationEnum;

/**
 * Перечень операций уровней доступа модуля "Диск".
 *
 * @method static self DISK_SHARING()
 * @method static self DISK_RESTORE()
 * @method static self DISK_ADD()
 * @method static self DISK_START_BP()
 * @method static self DISK_SETTINGS()
 * @method static self DISK_READ()
 * @method static self DISK_EDIT()
 * @method static self DISK_CREATE_WF()
 * @method static self DISK_DELETE()
 * @method static self DISK_DESTROY()
 * @method static self DISK_RIGHTS()
 *
 * @extends TaskOperationEnum<TaskName>
 */
class TaskOperation extends TaskOperationEnum
{
    /**
     * @psalm-return class-string<TaskName>
     */
    public static function nameClass(): string
    {
        return TaskName::class;
    }

    /**
     * Возможность делать общим элемент (шаринг).
     */
    public const DISK_SHARING = 'disk_sharing';

    /**
     * Восстановление элементов из корзины.
     */
    public const DISK_RESTORE = 'disk_restore';

    /**
     * Добавление элементов.
     */
    public const DISK_ADD = 'disk_add';

    /**
     * Запуск бизнес-процессов.
     */
    public const DISK_START_BP = 'disk_start_bp';

    /**
     * Настройка хранилища.
     */
    public const DISK_SETTINGS = 'disk_settings';

    /**
     * Просмотр элементов.
     */
    public const DISK_READ = 'disk_read';

    /**
     * Редактирование элементов.
     */
    public const DISK_EDIT = 'disk_edit';

    /**
     * Создание шаблонов бизнес-процессов.
     */
    public const DISK_CREATE_WF = 'disk_create_wf';

    /**
     * Удаление элементов в корзину.
     */
    public const DISK_DELETE = 'disk_delete';

    /**
     * Удаление элементов из корзины.
     */
    public const DISK_DESTROY = 'disk_destroy';

    /**
     * Управление правами доступа.
     */
    public const DISK_RIGHTS = 'disk_rights';
}
