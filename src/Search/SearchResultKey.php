<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Search;

use MyCLabs\Enum\Enum;

/**
 * Список ключей массива результата поиска.
 *
 * @method static self TITLE_FORMATED()
 * @method static self BODY_FORMATED()
 * @method static self TAGS_FORMATED()
 * @method static self FULL_DATE_CHANGE()
 * @method static self NAME()
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 */
class SearchResultKey extends Enum
{
    public const TITLE_FORMATED = 'TITLE_FORMATED';
    public const BODY_FORMATED = 'BODY_FORMATED';
    public const TAGS_FORMATED = 'TAGS_FORMATED';
    public const FULL_DATE_CHANGE = 'FULL_DATE_CHANGE';
    public const NAME = 'NAME';
}
