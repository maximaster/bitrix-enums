<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Префиксы провайдеров прав.
 *
 * @method static self INTRANET_USER()
 * @method static self INTRANET_DIVISION()
 * @method static self AUTHOR()
 * @method static self USER()
 * @method static self ALL_AUTHORIZED_USERS()
 * @method static self GROUP()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class AuthProviderPrefix extends Enum
{
    /**
     * Сотрудник и его руководители.
     */
    public const INTRANET_USER = 'IU';

    /**
     * Все сотрудники отдела с подотделами.
     */
    public const INTRANET_DIVISION = 'DR';

    /**
     * Автор.
     */
    public const AUTHOR = 'CR';

    /**
     * Пользователь.
     */
    public const USER = 'U';

    /**
     * Все авторизованные пользователи.
     */
    public const ALL_AUTHORIZED_USERS = 'AU';

    /**
     * Группа.
     */
    public const GROUP = 'G';
}
