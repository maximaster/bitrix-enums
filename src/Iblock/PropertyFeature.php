<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use MyCLabs\Enum\Enum;

/**
 * @method static self LIST_PAGE_SHOW()
 * @method static self DETAIL_PAGE_SHOW()
 */
class PropertyFeature extends Enum
{
    /** @bitrixSource \Bitrix\Iblock\Model\PropertyFeature::FEATURE_ID_LIST_PAGE_SHOW */
    public const LIST_PAGE_SHOW = 'LIST_PAGE_SHOW';

    /** @bitrixSource \Bitrix\Iblock\Model\PropertyFeature::FEATURE_ID_DETAIL_PAGE_SHOW */
    public const DETAIL_PAGE_SHOW = 'DETAIL_PAGE_SHOW';
}
