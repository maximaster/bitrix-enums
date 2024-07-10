<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Перечень объектов модуля "Информационные блоки".
 *
 * @method static self IBLOCK_IBLOCK()
 * @method static self IBLOCK_SECTION()
 * @method static self IBLOCK_ELEMENT()
 *
 * @template Enum<string>
 */
class EntityType extends Enum
{
    public const IBLOCK_IBLOCK = 'iblock';
    public const IBLOCK_SECTION = 'section';
    public const IBLOCK_ELEMENT = 'element';
}
