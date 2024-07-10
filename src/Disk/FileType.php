<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Disk;

use MyCLabs\Enum\Enum;

/**
 * Тип группы файла.
 * Соответсвие форматов групе находится в методе \Bitrix\Disk\TypeFile::getByExtension.
 *
 * @bitrixSource \Bitrix\Disk\TypeFile
 *
 * @method static self IMAGE()
 * @method static self VIDEO()
 * @method static self DOCUMENT()
 * @method static self ARCHIVE()
 * @method static self SCRIPT()
 * @method static self UNKNOWN()
 * @method static self PDF()
 * @method static self AUDIO()
 * @method static self KNOWN()
 * @method static self VECTOR_IMAGE()
 *
 * @extends Enum<int>
 *
 * @psalm-immutable
 */
class FileType extends Enum
{
    /**
     * Изображение.
     *
     * @var int
     */
    public const IMAGE = 2;

    /**
     * Видео.
     *
     * @var int
     */
    public const VIDEO = 3;

    /**
     * Документ.
     *
     * @var int
     */
    public const DOCUMENT = 4;

    /**
     * Архив.
     *
     * @var int
     */
    public const ARCHIVE = 5;

    /**
     * Скрипт.
     *
     * @var int
     */
    public const SCRIPT = 6;

    /**
     * Неизвестный тип документа.
     *
     * @var int
     */
    public const UNKNOWN = 7;

    /**
     * PDF-документ.
     *
     * @var int
     */
    public const PDF = 8;

    /**
     * Аудио.
     *
     * @var int
     */
    public const AUDIO = 9;

    /**
     * Файл какого-то типа.
     *
     * @var int
     */
    public const KNOWN = 10;

    /**
     * Векторное изображение.
     *
     * @var int
     */
    public const VECTOR_IMAGE = 11;
}
