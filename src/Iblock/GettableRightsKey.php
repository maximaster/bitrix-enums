<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use Maximaster\BitrixEnums\Main\RightsKey;

/**
 * Перечень ключей массива прав, получаемых из БД для модуля "Информационные блоки".
 *
 * @method static self ID()
 * @method static self GROUP_CODE()
 * @method static self DO_INHERIT()
 * @method static self IS_INHERITED()
 * @method static self OVERWRITED()
 * @method static self XML_ID()
 * @method static self ENTITY_TYPE()
 * @method static self ENTITY_ID()
 *
 * @extends RightsKey<string>
 *
 * @psalm-immutable
 */
class GettableRightsKey extends RightsKey
{
    public const ID = 'ID';
    public const GROUP_CODE = 'GROUP_CODE';
    public const DO_INHERIT = 'DO_INHERIT';
    public const IS_INHERITED = 'IS_INHERITED';
    public const OVERWRITED = 'OVERWRITED';
    public const XML_ID = 'XML_ID';
    public const ENTITY_TYPE = 'ENTITY_TYPE';
    public const ENTITY_ID = 'ENTITY_ID';
}
