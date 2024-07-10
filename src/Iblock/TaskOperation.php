<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Iblock;

use Maximaster\BitrixEnums\Main\TaskOperationEnum;

/**
 * Перечень операций для прав достувпа к модулю "Информационные блоки".
 *
 * @method static self SECTION_READ()
 * @method static self ELEMENT_READ()
 * @method static self SECTION_ELEMENT_BIND()
 * @method static self IBLOCK_ADMIN_DISPLAY()
 * @method static self ELEMENT_EDIT()
 * @method static self ELEMENT_EDIT_PRICE()
 * @method static self ELEMENT_DELETE()
 * @method static self ELEMENT_BIZPROC_START()
 * @method static self SECTION_EDIT()
 * @method static self SECTION_DELETE()
 * @method static self SECTION_SECTION_BIND()
 * @method static self ELEMENT_EDIT_ANY_WF_STATUS()
 * @method static self IBLOCK_EDIT()
 * @method static self IBLOCK_DELETE()
 * @method static self IBLOCK_RIGHTS_EDIT()
 * @method static self IBLOCK_EXPORT()
 * @method static self SECTION_RIGHTS_EDIT()
 * @method static self ELEMENT_RIGHTS_EDIT()
 *
 * @template Enum<string>
 */
class TaskOperation extends TaskOperationEnum
{
    /**
     * @return class-string<TaskName>
     */
    public static function nameClass()
    {
        return TaskName::class;
    }

    /** @const string Чтение параметров раздела */
    public const SECTION_READ = 'section_read';

    /** @const string Чтение элемента */
    public const ELEMENT_READ = 'element_read';

    /** @const string Добавление элемента в раздел (создание элемента) */
    public const SECTION_ELEMENT_BIND = 'section_element_bind';

    /** @const string Показ инфоблока в административном разделе */
    public const IBLOCK_ADMIN_DISPLAY = 'iblock_admin_display';

    /** @const string Изменение элемента */
    public const ELEMENT_EDIT = 'element_edit';

    /** @const string Редактирование цен, относящихся к элементу */
    public const ELEMENT_EDIT_PRICE = 'element_edit_price';

    /** @const string Удаление элемента */
    public const ELEMENT_DELETE = 'element_delete';

    /** @const string Запуск бизнес-процесса для элемента */
    public const ELEMENT_BIZPROC_START = 'element_bizproc_start';

    /** @const string Изменение раздела */
    public const SECTION_EDIT = 'section_edit';

    /** @const string Удаление раздела */
    public const SECTION_DELETE = 'section_delete';

    /** @const string Создание подраздела в разделе */
    public const SECTION_SECTION_BIND = 'section_section_bind';

    /** @const string Изменение элемента в любом статусе документооборота */
    public const ELEMENT_EDIT_ANY_WF_STATUS = 'element_edit_any_wf_status';

    /** @const string Изменение параметров инфоблока */
    public const IBLOCK_EDIT = 'iblock_edit';

    /** @const string Удаление инфоблока */
    public const IBLOCK_DELETE = 'iblock_delete';

    /** @const string Изменение прав доступа к инфоблоку */
    public const IBLOCK_RIGHTS_EDIT = 'iblock_rights_edit';

    /** @const string Экспорт инфоблока */
    public const IBLOCK_EXPORT = 'iblock_export';

    /** @const string Изменение прав доступа к разделу */
    public const SECTION_RIGHTS_EDIT = 'section_rights_edit';

    /** @const string Изменение прав доступа к элементу */
    public const ELEMENT_RIGHTS_EDIT = 'element_rights_edit';
}
