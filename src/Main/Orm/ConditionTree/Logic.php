<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main\Orm\ConditionTree;

use MyCLabs\Enum\Enum;

/**
 * Варианты логики для дерева условий.
 *
 * @extends Enum<string>
 *
 * @method static self AND()
 * @method static self OR()
 */
class Logic extends Enum
{
    public const AND = 'and';
    public const OR = 'or';

    public static function fromBitrix(Logic $logic): self
    {
        return new self(strtolower($logic->value));
    }
}
