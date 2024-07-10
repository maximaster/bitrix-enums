<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

/**
 * Список опций главного модуля.
 */
class Option extends OptionEnum
{
    public const COMPONENT_CACHE_ON = 'component_cache_on';
    public const COMPONENT_MANAGED_CACHE_ON = 'component_managed_cache_on';
    public const MAIL_EVENT_BULK = 'mail_event_bulk';

    public static function module(): ModuleId
    {
        return ModuleId::MAIN();
    }
}
