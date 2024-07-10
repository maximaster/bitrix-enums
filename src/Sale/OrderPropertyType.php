<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Sale;

use MyCLabs\Enum\Enum;

class OrderPropertyType extends Enum
{
    public const CHECKBOX = 'CHECKBOX';         // - флаг;
    public const TEXT = 'TEXT';                 // - строка текста;
    public const SELECT = 'SELECT';             // - выпадающий список значений;
    public const MULTISELECT = 'MULTISELECT';   // - список со множественным выбором;
    public const TEXTAREA = 'TEXTAREA';         // - многострочный текст;
    public const LOCATION = 'LOCATION';         // - местоположение;
    public const RADIO = 'RADIO';               // - переключатель.
}
