<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Im\Chat;

use MyCLabs\Enum\Enum;

/**
 * Типы чатов.
 *
 * @method static self SYSTEM()
 * @method static self PRIVATE()
 * @method static self CHAT()
 * @method static self OPEN()
 * @method static self THREAD()
 * @method static self OPEN_LINE()
 */
class ChatType extends Enum
{
    public const SYSTEM = 'S';
    public const PRIVATE = 'P';

    /**
     * Закрытый чат.
     */
    public const CHAT = 'C';

    public const OPEN = 'O';
    public const THREAD = 'T';
    public const OPEN_LINE = 'L';
}
