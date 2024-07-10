<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Список сайтов.
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 *
 * @method static self DEFAULT()
 */
class SiteId extends Enum
{
    public const DEFAULT = 's1';
}
