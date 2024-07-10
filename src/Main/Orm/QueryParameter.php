<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm;

use MyCLabs\Enum\Enum;

/**
 * Доступные наименования параметров для выборок через DataManager.
 *
 * @extends Enum<string>
 *
 * @method static self SELECT()
 * @method static self FILTER()
 * @method static self GROUP()
 * @method static self ORDER()
 * @method static self LIMIT()
 * @method static self OFFSET()
 * @method static self RUNTIME()
 */
class QueryParameter extends Enum
{
    /** Имена полей, которые необходимо получить в результате. */
    public const SELECT = 'select';

    /** Описание фильтра для 'WHERE' и 'HAVING'. */
    public const FILTER = 'filter';

    /** Явное указание полей, по которым нужно группировать результат. */
    public const GROUP = 'group';

    /** Параметры сортировки. */
    public const ORDER = 'order';

    /** Количество записей. */
    public const LIMIT = 'limit';

    /** Смещение для 'limit'. */
    public const OFFSET = 'offset';

    /** Динамически определенные поля. */
    public const RUNTIME = 'runtime';
}
