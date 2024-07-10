<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * Флаг выбора интерфейса отображения привязки элемента к разделам.
 *
 * @method static self SELECT()
 * @method static self DROPDOWNS()
 * @method static self PATH()
 */
class IblockSectionChooser extends Enum
{
    /** @bitrixSource \Bitrix\Iblock\IblockTable::SECTION_CHOOSER_SELECT */
    public const SELECT = 'L';

    /** @bitrixSource \Bitrix\Iblock\IblockTable::SECTION_CHOOSER_DROPDOWNS */
    public const DROPDOWNS = 'D';

    /** @bitrixSource \Bitrix\Iblock\IblockTable::SECTION_CHOOSER_PATH */
    public const PATH = 'P';
}
