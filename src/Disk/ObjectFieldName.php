<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use MyCLabs\Enum\Enum;

/**
 * @extends Enum<string>
 *
 * @psalm-immutable
 *
 * @method static self CREATE_USER()
 * @method static self UPDATE_USER()
 * @method static self DELETE_USER()
 * @method static self REAL_OBJECT()
 * @method static self STORAGE()
 * @method static self LOCK()
 * @method static self TTL()
 */
class ObjectFieldName extends Enum
{
    /** @var string */
    public const CREATE_USER = 'CREATE_USER';

    /** @var string */
    public const UPDATE_USER = 'UPDATE_USER';

    /** @var string */
    public const DELETE_USER = 'DELETE_USER';

    /** @var string */
    public const REAL_OBJECT = 'REAL_OBJECT';

    /** @var string */
    public const STORAGE = 'STORAGE';

    /** @var string */
    public const LOCK = 'LOCK';

    /** @var string */
    public const TTL = 'TTL';
}
