<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use MyCLabs\Enum\Enum;

/**
 * Список типов удаления.
 *
 * @method static self NONE()
 * @method static self ROOT()
 * @method static self CHILD()
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 */
class DeletedType extends Enum
{
    /**
     * Тип удаления: не удален.
     *
     * @var int
     */
    public const NONE = 0;

    /**
     * Тип удаления.
     *
     * @var int
     */
    public const ROOT = 3;

    /**
     * Тип удаления.
     *
     * @var int
     */
    public const CHILD = 4;
}
