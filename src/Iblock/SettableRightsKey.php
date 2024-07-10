<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use Maximaster\BitrixEnums\Main\RightsKey;

/**
 * Перечень ключей массива, участвующих в установке прав на сущности модуля
 * "Информационные блоки".
 *
 * @method static self GROUP_CODE()
 * @method static self DO_CLEAN()
 * @method static self DO_INHERIT()
 *
 * @extends RightsKey<string>
 *
 * @psalm-immutable
 */
class SettableRightsKey extends RightsKey
{
    public const GROUP_CODE = 'GROUP_CODE';
    public const DO_CLEAN = 'DO_CLEAN';
    public const DO_INHERIT = 'DO_INHERIT';
}
