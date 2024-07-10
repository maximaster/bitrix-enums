<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Pull;

use MyCLabs\Enum\Enum;

/**
 * Ключи данных метода @see CPullStack::AddByUser.
 *
 * @method static self MODULE()
 * @method static self COMMAND()
 * @method static self PARAMS()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class AddPullEventKey extends Enum
{
    public const MODULE = 'module_id';
    public const COMMAND = 'command';
    public const PARAMS = 'params';
}
