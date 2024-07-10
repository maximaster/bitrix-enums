<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Список режимов проверки прав доступа.
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 *
 * @method static self STANDARD()
 * @method static self EXTENDED()
 */
class RightsMode extends Enum
{
    /** Стандартные права доступа. */
    public const STANDARD = 'S';

    /** Расширенные права доступа (позволяет настроить права на элементы, разделы). */
    public const EXTENDED = 'E';
}
