<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * @method static self DO_NOT_SHOW()
 * @method static self EXACT_MATCH()
 * @method static self SEARCH_BY_MASK()
 * @method static self SUBSTRING_SEARCH()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class UserFieldShowFilterType extends Enum
{
    /**
     * Не показывать.
     *
     * @var string
     *
     * @psalm-var string
     */
    public const DO_NOT_SHOW = 'N';

    /**
     * Точное совпадение.
     *
     * @var string
     *
     * @psalm-var string
     */
    public const EXACT_MATCH = 'I';

    /**
     * Поиск по маске.
     *
     * @var string
     *
     * @psalm-var string
     */
    public const SEARCH_BY_MASK = 'E';

    /**
     * Поиск по подстроке.
     *
     * @var string
     *
     * @psalm-var string
     */
    public const SUBSTRING_SEARCH = 'S';
}
