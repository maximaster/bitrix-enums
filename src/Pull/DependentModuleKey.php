<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Pull;

use MyCLabs\Enum\Enum;

/**
 * Ключи данных обработчика события OnGetDependentModule.
 *
 * @method static self MODULE()
 * @method static self USE()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class DependentModuleKey extends Enum
{
    public const MODULE = 'MODULE_ID';
    public const USE = 'USE';
}
