<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Cluster;

use MyCLabs\Enum\Enum;

/**
 * Список возможных статусов для memcached-серверов.
 *
 * @extends Enum<string>
 *
 * @method static self OFFLINE()
 * @method static self READY()
 * @method static self ONLINE()
 */
class ServerStatus extends Enum
{
    /**
     * Сервер недоступен.
     */
    public const OFFLINE = 'OFFLINE';

    /**
     * Сервер доступен, но не используется.
     */
    public const READY = 'READY';

    /**
     * Сервер работает.
     */
    public const ONLINE = 'ONLINE';
}
