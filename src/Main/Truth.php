<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Список вариантов правды (да или нет).
 * Примечание: если назвать Boolean, то линтеры и phpstorm начнут думать что это
 *             нативный тип, что приводит к куче ошибок.
 *
 * @extends Enum<'Y'|'N'>
 *
 * @method static self YES()
 * @method static self NO()
 */
class Truth extends Enum
{
    public const YES = 'Y';
    public const NO = 'N';

    /**
     * Преобразует Y в true, а N в false.
     *
     * @psalm-param 'Y'|'N' $yesNoValue
     */
    public static function convert(string $yesNoValue): bool
    {
        return (new self($yesNoValue))->toNative();
    }

    public function toNative(): bool
    {
        return $this->value === self::YES;
    }

    public static function fromBoolean(bool $yesNo): self
    {
        return $yesNo ? static::from(static::YES) : static::from(static::NO);
    }
}
