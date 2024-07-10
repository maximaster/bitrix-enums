<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use CUserTypeManager;
use MyCLabs\Enum\Enum;

/**
 * Базовые типы пользовательских полей.
 *
 * @see CUserTypeManager
 *
 * @extends Enum<string>
 *
 * @method static self INT()
 * @method static self FILE()
 * @method static self ENUM()
 * @method static self DOUBLE()
 * @method static self DATETIME()
 * @method static self STRING()
 * @method static self ENUMERATION()
 * @method static self INTEGER()
 * @method static self BOOLEAN()
 * @method static self VIDEO()
 * @method static self DATE()
 * @method static self STRING_FORMATTED()
 * @method static self URL()
 * @method static self IBLOCK_SECTION()
 * @method static self IBLOCK_ELEMENT()
 * @method static self CRM()
 * @method static self CRM_STATUS()
 * @method static self MONEY()
 * @method static self ADDRESS()
 */
class UserFieldBaseType extends Enum
{
    /**
     * @see CUserTypeManager::BASE_TYPE_INT
     */
    public const INT = 'int';

    /**
     * @see CUserTypeManager::BASE_TYPE_FILE
     */
    public const FILE = 'file';

    /**
     * @see CUserTypeManager::BASE_TYPE_ENUM
     */
    public const ENUM = 'enum';

    /**
     * @see CUserTypeManager::BASE_TYPE_DOUBLE
     */
    public const DOUBLE = 'double';

    /**
     * @see CUserTypeManager::BASE_TYPE_DATETIME
     */
    public const DATETIME = 'datetime';

    /**
     * @see CUserTypeManager::BASE_TYPE_STRING
     */
    public const STRING = 'string';

    /** @bitrixSource \Bitrix\Main\UserField\Types\EnumType::USER_TYPE_ID */
    public const ENUMERATION = 'enumeration';

    /** @bitrixSource \Bitrix\Main\UserField\Types\IntegerType::USER_TYPE_ID */
    public const INTEGER = 'integer';

    /** @bitrixSource \Bitrix\Main\UserField\Types\BooleanType::USER_TYPE_ID */
    public const BOOLEAN = 'boolean';

    /** @bitrixSource TODO */
    public const VIDEO = 'video';

    /** @bitrixSource \Bitrix\Main\UserField\Types\DateType::USER_TYPE_ID */
    public const DATE = 'date';

    /** @bitrixSource \Bitrix\Main\UserField\Types\StringFormattedType::USER_TYPE_ID */
    public const STRING_FORMATTED = 'string_formatted';

    /** @bitrixSource \Bitrix\Main\UserField\Types\UrlType::USER_TYPE_ID */
    public const URL = 'url';

    /** @bitrixSource \Bitrix\Iblock\UserField\Types\SectionType::USER_TYPE_ID */
    public const IBLOCK_SECTION = 'iblock_section';

    /** @bitrixSource \Bitrix\Iblock\UserField\Types\ElementType::USER_TYPE_ID */
    public const IBLOCK_ELEMENT = 'iblock_element';

    /** @bitrixSource TODO */
    public const CRM = 'crm';

    /** @bitrixSource TODO */
    public const CRM_STATUS = 'crm_status';

    /** @bitrixSource \Bitrix\Currency\UserField\Types\MoneyType::USER_TYPE_ID */
    public const MONEY = 'money';

    /** @bitrixSource \Bitrix\Fileman\UserField\Types\AddressType::USER_TYPE_ID */
    public const ADDRESS = 'address';
}
