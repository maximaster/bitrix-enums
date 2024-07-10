<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm\Condition;

use MyCLabs\Enum\Enum;

/**
 * Оператор для условия.
 *
 * @method static self EQUAL()
 * @method static self NOT_EQUAL()
 * @method static self LESS()
 * @method static self LESS_OR_EQUAL()
 * @method static self GREATER()
 * @method static self GREATER_OR_EQUAL()
 * @method static self IN()
 * @method static self BETWEEN()
 * @method static self LIKE()
 * @method static self EXISTS()
 * @method static self MATCH()
 */
class Operator extends Enum
{
    public const EQUAL = '=';
    public const NOT_EQUAL = '!=';
    public const LESS = '<';
    public const LESS_OR_EQUAL = '<=';
    public const GREATER = '>';
    public const GREATER_OR_EQUAL = '>=';
    public const IN = 'in';
    public const BETWEEN = 'between';
    public const LIKE = 'like';
    public const EXISTS = 'exists';
    public const MATCH = 'match';
    // public const NOT_EQUAL = '<>';
}
