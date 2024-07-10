<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm\Field;

use MyCLabs\Enum\Enum;

/**
 * Ключи параметров полей.
 *
 * @extends Enum<string>
 */
class FieldParameterKey extends Enum
{
    public const COLUMN_NAME = 'column_name';
}
