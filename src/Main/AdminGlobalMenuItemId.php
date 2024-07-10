<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Идентификаторы пунктов глобального меню административной панели.
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 *
 * @method static self DESKTOP()
 * @method static self CONTENT()
 * @method static self MARKETING()
 * @method static self SERVICES()
 * @method static self SETTINGS()
 */
class AdminGlobalMenuItemId extends Enum
{
    public const DESKTOP = 'global_menu_desktop';
    public const CONTENT = 'global_menu_content';
    public const MARKETING = 'global_menu_marketing';
    public const SERVICES = 'global_menu_services';
    public const SETTINGS = 'global_menu_settings';
}
