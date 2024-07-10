<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Learning;

use Maximaster\BitrixEnums\Main\TaskNameEnum;

/**
 * Перечень системных уровней доступа к модулю 'Обучение'.
 *
 * @extends TaskNameEnum<TaskLetter>
 *
 * @method static self DENIED()
 * @method static self READ()
 * @method static self MANAGE_BASIC()
 * @method static self MANAGE_FULL()
 * @method static self LINKAGE_AS_CHILD()
 * @method static self LINKAGE_AS_PARENT()
 * @method static self LINKAGE_ANY()
 * @method static self MANAGE_AS_CHILD()
 * @method static self MANAGE_AS_PARENT()
 * @method static self MANAGE_DUAL()
 */
class TaskName extends TaskNameEnum
{
    /**
     * {@inheritDoc}
     *
     * @psalm-return class-string<TaskLetter>
     */
    public static function letterClass()
    {
        return TaskLetter::class;
    }

    /** Доступ запрещён. */
    public const DENIED = 'learning_lesson_access_denied';

    /** Просмотр. */
    public const READ = 'learning_lesson_access_read';

    /** Запись (просмотр, создание, редактирование, удаление) */
    public const MANAGE_BASIC = 'learning_lesson_access_manage_basic';

    /** Полный доступ (просмотр, создание, редактирование, удаление, привязывание, отвязывание, управление правами). */
    public const MANAGE_FULL = 'learning_lesson_access_manage_full';

    /** Просмотр, привязывание/отвязывание в качестве потомка. */
    public const LINKAGE_AS_CHILD = 'learning_lesson_access_linkage_as_child';

    /** Просмотр, привязывание/отвязывание в качестве родителя. */
    public const LINKAGE_AS_PARENT = 'learning_lesson_access_linkage_as_parent';

    /** Просмотр, привязывание, отвязывание. */
    public const LINKAGE_ANY = 'learning_lesson_access_linkage_any';

    /** Просмотр, редактирование, удаление, создание, привязывание/отвязывание в качестве потомка. */
    public const MANAGE_AS_CHILD = 'learning_lesson_access_manage_as_child';

    /** Просмотр, редактирование, удаление, создание, привязывание/отвязывание в качестве родителя. */
    public const MANAGE_AS_PARENT = 'learning_lesson_access_manage_as_parent';

    /** Просмотр, редактирование, удаление, создание, привязывание, отвязывание. */
    public const MANAGE_DUAL = 'learning_lesson_access_manage_dual';
}
