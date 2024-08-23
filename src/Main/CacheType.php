<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Типы кеша.
 *
 * @method static self LANDING()
 * @method static self MENU()
 * @method static self MANAGED()
 * @method static self HTML()
 *
 * @psalm-immutable
 */
class CacheType extends Enum
{
    public const LANDING = 'landing';
    public const MENU = 'menu';
    public const MANAGED = 'managed';
    public const HTML = 'html';
}
