<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Search;

use MyCLabs\Enum\Enum;

/**
 * Список опций при работе с классами модуля "Поиск".
 *
 * @method static self QUERY()
 * @method static self STEMMING()
 * @method static self SITE_ID()
 *
 * @extends Enum<non-empty-string>
 *
 * @psalm-immutable
 */
class QueryOptionKey extends Enum
{
    public const QUERY = 'QUERY';
    public const STEMMING = 'STEMMING';
    public const SITE_ID = 'SITE_ID';
}
