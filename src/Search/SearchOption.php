<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Search;

use Maximaster\BitrixEnums\Main\ModuleId;
use Maximaster\BitrixEnums\Main\OptionEnum;

/**
 * Список опций модуля "Поиск".
 */
class SearchOption extends OptionEnum
{
    public static function module(): ModuleId
    {
        return ModuleId::SEARCH_MODULE();
    }

    /**
     * Маска исключения индексации статических страниц.
     */
    public const EXCLUDE_MASK = 'exclude_mask';

    /**
     * Максимальное количество документов в результатах поиска.
     */
    public const MAX_RESULT_SIZE = 'max_result_size';
}
