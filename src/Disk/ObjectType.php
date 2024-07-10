<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use MyCLabs\Enum\Enum;

/**
 * Тип объекта диска.
 *
 * @method static self FOLDER()
 * @method static self FILE()
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 */
class ObjectType extends Enum
{
    /**
     * Тип объекта: папка.
     *
     * @var int
     *
     * @psalm-var int
     */
    public const FOLDER = 2;

    /**
     * Тип объекта: файл.
     *
     * @var int
     *
     * @psalm-var int
     */
    public const FILE = 3;
}
