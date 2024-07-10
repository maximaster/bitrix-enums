<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Learning;

use Maximaster\BitrixEnums\Main\TaskLetterEnum;

/**
 * Перечень букв уровней доступа к модулю 'Обучение'.
 *
 * @extends TaskLetterEnum<TaskName>
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
class TaskLetter extends TaskLetterEnum
{
    /**
     * {@inheritDoc}
     *
     * @psalm-return class-string<TaskName>
     */
    public static function nameClass(): string
    {
        return TaskName::class;
    }

    /** Доступ запрещён. */
    public const DENIED = 'D';

    /** Просмотр. */
    public const READ = 'R';

    /** Запись (просмотр, создание, редактирование, удаление) */
    public const MANAGE_BASIC = 'W';

    /** Полный доступ (просмотр, создание, редактирование, удаление, привязывание, отвязывание, управление правами). */
    public const MANAGE_FULL = 'X';

    // TODO Ниже буквы выдуманы, уточнить перед использованием!.
    /** Просмотр, привязывание/отвязывание в качестве потомка. */
    public const LINKAGE_AS_CHILD = 'LC';

    /** Просмотр, привязывание/отвязывание в качестве родителя. */
    public const LINKAGE_AS_PARENT = 'LP';

    /** Просмотр, привязывание, отвязывание. */
    public const LINKAGE_ANY = 'LA';

    /** Просмотр, редактирование, удаление, создание, привязывание/отвязывание в качестве потомка. */
    public const MANAGE_AS_CHILD = 'MC';

    /** Просмотр, редактирование, удаление, создание, привязывание/отвязывание в качестве родителя. */
    public const MANAGE_AS_PARENT = 'MP';

    /** Просмотр, редактирование, удаление, создание, привязывание, отвязывание. */
    public const MANAGE_DUAL = 'MD';
}
