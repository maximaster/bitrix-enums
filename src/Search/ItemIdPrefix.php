<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Search;

use MyCLabs\Enum\Enum;

/**
 * Список префиксов для хранения ID объектов битрикс в таблице поискового индекса.
 *
 * @method static self IBLOCK_SECTION()
 * @method static self IBLOCK()
 * @method static self DISK_FILE()
 * @method static self DISK_FOLDER()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
class ItemIdPrefix extends Enum
{
    /**
     * Префикс для значения столбца ITEM_ID для раздела ИБ (категории БД).
     */
    public const IBLOCK_SECTION = 'S';

    /**
     * Префикс для значения столбца ITEM_ID для ИБ (БД).
     */
    public const IBLOCK = 'I';

    /**
     * Префикс для значений столбца ITEM_ID для файла.
     */
    public const DISK_FILE = 'FILE_';

    /**
     * Префикс для значений столбца ITEM_ID для папки.
     */
    public const DISK_FOLDER = 'FOLDER_';
}
