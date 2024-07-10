<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm;

use MyCLabs\Enum\Enum;

/**
 * Доступные направления сортировки для выборок через DataManager.
 *
 * @extends Enum<string>
 *
 * @method static self ASC()
 * @method static self DESC()
 */
class OrderDirection extends Enum
{
    public const ASC = 'asc';
    public const DESC = 'desc';

    public static function fromAnyCase(string $value): self
    {
        return self::from(strtolower($value));
    }

    public function invert(): self
    {
        return $this->equals(self::ASC()) ? self::DESC() : self::ASC();
    }
}
