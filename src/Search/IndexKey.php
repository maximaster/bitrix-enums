<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Search;

use MyCLabs\Enum\Enum;

/**
 * Список ключей для индекса объекта.
 *
 * @method static self PERMISSIONS()
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 */
class IndexKey extends Enum
{
    public const PERMISSIONS = 'PERMISSIONS';
}
