<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;

/**
 * Варианты значений SEVERITY в b_event_log.
 *
 * @method static self SECURITY()
 * @method static self ERROR()
 * @method static self WARNING()
 * @method static self INFO()
 * @method static self DEBUG()
 * @method static self UNKNOWN()
 * @method static self SEVERITY()
 */
class EventLogSeverity extends Enum
{
    public const SECURITY = 'SECURITY';
    public const ERROR = 'ERROR';
    public const WARNING = 'WARNING';
    public const INFO = 'INFO';
    public const DEBUG = 'DEBUG';
    public const UNKNOWN = 'UNKNOWN';
    public const SEVERITY = 'SEVERITY';
}
