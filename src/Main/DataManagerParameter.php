<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Доступные параметры getList.
 *
 * @method static self SELECT()
 * @method static self FILTER()
 * @method static self GROUP()
 * @method static self ORDER()
 * @method static self LIMIT()
 * @method static self OFFSET()
 * @method static self COUNT_TOTAL()
 * @method static self RUNTIME()
 * @method static self DATA_DOUBLING()
 * @method static self CACHE()
 *
 * @extends Enum<non-empty-string>
 */
class DataManagerParameter extends Enum
{
    public const SELECT = 'select';
    public const FILTER = 'filter';
    public const GROUP = 'group';
    public const ORDER = 'order';
    public const LIMIT = 'limit';
    public const OFFSET = 'offset';
    public const COUNT_TOTAL = 'count_total';
    public const RUNTIME = 'runtime';
    public const DATA_DOUBLING = 'data_doubling';
    public const CACHE = 'cache';
}
