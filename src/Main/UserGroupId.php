<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Список групп пользователей.
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 *
 * @method static self ADMINISTRATORS()
 * @method static self ALL_USERS()
 */
class UserGroupId extends Enum
{
    public const ADMINISTRATORS = 1;
    public const ALL_USERS = 2;
}
