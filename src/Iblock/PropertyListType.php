<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * @method static self CHECKBOX()
 * @method static self LISTBOX()
 */
class PropertyListType extends Enum
{
    /** @bitrixSource \Bitrix\Iblock\PropertyTable::CHECKBOX */
    public const CHECKBOX = 'C';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::LISTBOX */
    public const LISTBOX = 'L';
}
