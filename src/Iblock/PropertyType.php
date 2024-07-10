<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Список типов свойств инфоблока.
 *
 * @method static self STRING()
 * @method static self NUMBER()
 * @method static self FILE()
 * @method static self ELEMENT()
 * @method static self SECTION()
 * @method static self LIST()
 */
class PropertyType extends Enum
{
    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_STRING */
    public const STRING = 'S';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_NUMBER */
    public const NUMBER = 'N';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_FILE */
    public const FILE = 'F';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_ELEMENT */
    public const ELEMENT = 'E';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_SECTION */
    public const SECTION = 'G';

    /** @bitrixSource \Bitrix\Iblock\PropertyTable::TYPE_LIST */
    public const LIST = 'L';
}
