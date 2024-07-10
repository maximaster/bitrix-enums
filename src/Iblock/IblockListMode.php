<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Режим отображения списка элементов в административном разделе.
 *
 * @method static self SEPARATE()
 * @method static self COMBINED()
 */
class IblockListMode extends Enum
{
    /** @bitrixSource \Bitrix\Iblock\IblockTable::LIST_MODE_SEPARATE */
    public const SEPARATE = 'S';

    /** @bitrixSource \Bitrix\Iblock\IblockTable::LIST_MODE_COMBINED */
    public const COMBINED = 'C';
}
