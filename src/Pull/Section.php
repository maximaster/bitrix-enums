<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Pull;

use MyCLabs\Enum\Enum;

/**
 * Разделы сайта.
 *
 * @method static self PUBLIC()
 * @method static self ADMIN()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class Section extends Enum
{
    public const PUBLIC = 'PUBLIC_SECTION';
    public const ADMIN = 'ADMIN_SECTION';
}
