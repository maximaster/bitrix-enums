<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Sale;

use MyCLabs\Enum\Enum;

class InputType extends Enum
{
    public const STRING = 'STRING';
    public const NUMBER = 'NUMBER';
    public const YES_NO = 'Y/N';
    public const ENUM = 'ENUM';
    public const FILE = 'FILE';
    public const DATE = 'DATE';
    public const LOCATION = 'LOCATION';
    public const DELIVERY_PERIOD = 'DELIVERY_PERIOD';
    public const DELIVERY_READ_ONLY = 'DELIVERY_READ_ONLY';
    public const DELIVERY_MULTI_CONTROL_STRING = 'DELIVERY_MULTI_CONTROL_STRING';
    public const LOCATION_MULTI = 'LOCATION_MULTI';
    public const LOCATION_MULTI_EXCLUDE = 'LOCATION_MULTI_EXCLUDE';
    public const DELIVERY_PRODUCT_CATEGORIES = 'DELIVERY_PRODUCT_CATEGORIES';
    public const DELIVERY_BUTTON_SELECTOR = 'DELIVERY_BUTTON_SELECTOR';
}
