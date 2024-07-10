<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Тип описания.
 *
 * @method static self TEXT()
 * @method static self HTML()
 */
class IblockDescriptionType extends Enum
{
    public const TEXT = 'text';
    public const HTML = 'html';
}
