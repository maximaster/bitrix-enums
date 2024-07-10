<?php

declare(strict_types=1);

namespace Maximaster\BitrixEnums\Main;

use MyCLabs\Enum\Enum;
use Webmozart\Assert\Assert;

/**
 * Список модулей.
 *
 * @extends Enum<non-empty-string>
 *
 * @method static static ADVERTISING()
 * @method static static B24NETWORK()
 * @method static static BITRIX24()
 * @method static static BITRIXCLOUD()
 * @method static static BIZPROC()
 * @method static static BIZPROCDESIGNER()
 * @method static static BLOG()
 * @method static static CALENDAR()
 * @method static static CATALOG()
 * @method static static CLOUDS()
 * @method static static CLUSTER()
 * @method static static COMPRESSION()
 * @method static static CONTROLLER()
 * @method static static CRM()
 * @method static static CURRENCY()
 * @method static static DAV()
 * @method static static DISK()
 * @method static static DOCUMENTGENERATOR()
 * @method static static EXTRANET()
 * @method static static FACEID()
 * @method static static FILEMAN()
 * @method static static FORM()
 * @method static static FORUM()
 * @method static static HIGHLOADBLOCK()
 * @method static static IBLOCK()
 * @method static static IDEA()
 * @method static static IM()
 * @method static static IMBOT()
 * @method static static IMCONNECTOR()
 * @method static static IMOPENLINES()
 * @method static static INTRANET()
 * @method static static LANDING()
 * @method static static LDAP()
 * @method static static LEARNING()
 * @method static static LISTS()
 * @method static static MAIL()
 * @method static static MAIN()
 * @method static static MEETING()
 * @method static static MESSAGESERVICE()
 * @method static static MOBILE()
 * @method static static MOBILEAPP()
 * @method static static PERFMON()
 * @method static static PHOTOGALLERY()
 * @method static static PULL()
 * @method static static RECYCLEBIN()
 * @method static static REPORT()
 * @method static static REST()
 * @method static static SALE()
 * @method static static SCALE()
 * @method static static SECURITY()
 * @method static static SENDER()
 * @method static static SEO()
 * @method static static SOCIALNETWORK()
 * @method static static SOCIALSERVICES()
 * @method static static STATISTIC()
 * @method static static SUBSCRIBE()
 * @method static static SUPPORT()
 * @method static static TASKS()
 * @method static static TIMEMAN()
 * @method static static TRANSFORMER()
 * @method static static TRANSLATE()
 * @method static static UI()
 * @method static static VOTE()
 * @method static static VOXIMPLANT()
 * @method static static WEBDAV()
 * @method static static WEBSERVICE()
 * @method static static WIKI()
 * @method static static WORKFLOW()
 * @method static static XDIMPORT()
 * @method static static XMPP()
 */
class ModuleId extends Enum
{
    public const ADVERTISING = 'advertising';
    public const B24NETWORK = 'b24network';
    public const BITRIX24 = 'bitrix24';
    public const BITRIXCLOUD = 'bitrixcloud';
    public const BIZPROC = 'bizproc';
    public const BIZPROCDESIGNER = 'bizprocdesigner';
    public const BLOG = 'blog';
    public const CALENDAR = 'calendar';
    public const CATALOG = 'catalog';
    public const CLOUDS = 'clouds';
    public const CLUSTER = 'cluster';
    public const COMPRESSION = 'compression';
    public const CONTROLLER = 'controller';
    public const CRM = 'crm';
    public const CURRENCY = 'currency';
    public const DAV = 'dav';
    public const DISK = 'disk';
    public const DOCUMENTGENERATOR = 'documentgenerator';
    public const EXTRANET = 'extranet';
    public const FACEID = 'faceid';
    public const FILEMAN = 'fileman';
    public const FORM = 'form';
    public const FORUM = 'forum';
    public const HIGHLOADBLOCK = 'highloadblock';
    public const IBLOCK = 'iblock';
    public const IDEA = 'idea';
    public const IM = 'im';
    public const IMBOT = 'imbot';
    public const IMCONNECTOR = 'imconnector';
    public const IMOPENLINES = 'imopenlines';
    public const INTRANET = 'intranet';
    public const LANDING = 'landing';
    public const LDAP = 'ldap';
    public const LEARNING = 'learning';
    public const LISTS = 'lists';
    public const MAIL = 'mail';
    public const MAIN = 'main';
    public const MEETING = 'meeting';
    public const MESSAGESERVICE = 'messageservice';
    public const MOBILE = 'mobile';
    public const MOBILEAPP = 'mobileapp';
    public const PERFMON = 'perfmon';
    public const PHOTOGALLERY = 'photogallery';
    public const PULL = 'pull';
    public const RECYCLEBIN = 'recyclebin';
    public const REPORT = 'report';
    public const REST = 'rest';
    public const SALE = 'sale';
    public const SCALE = 'scale';
    public const SEARCH = 'search';
    public const SECURITY = 'security';
    public const SENDER = 'sender';
    public const SEO = 'seo';
    public const SOCIALNETWORK = 'socialnetwork';
    public const SOCIALSERVICES = 'socialservices';
    public const STATISTIC = 'statistic';
    public const SUBSCRIBE = 'subscribe';
    public const SUPPORT = 'support';
    public const TASKS = 'tasks';
    public const TIMEMAN = 'timeman';
    public const TRANSFORMER = 'transformer';
    public const TRANSLATE = 'translate';
    public const UI = 'ui';
    public const VOTE = 'vote';
    public const VOXIMPLANT = 'voximplant';
    public const WEBDAV = 'webdav';
    public const WEBSERVICE = 'webservice';
    public const WIKI = 'wiki';
    public const WORKFLOW = 'workflow';
    public const XDIMPORT = 'xdimport';
    public const XMPP = 'xmpp';

    /**
     * Создать экземпляр из формы записи типа Pascal. Например, если такое имя
     * пришло из FQCN.
     *
     * @psalm-param non-empty-string $name
     */
    public static function fromPascalName(string $name): self
    {
        Assert::stringNotEmpty($name);

        return new self(strtolower($name));
    }

    // phpcs:disable PSR1.Methods.CamelCapsMethodName.NotCamelCaps

    /**
     * Решает конфликт со стандартным именем метода search из Enum.
     *
     * @SuppressWarnings(PHPMD.CamelCaseMethodName) why:dependency
     */
    public static function SEARCH_MODULE(): self
    {
        return self::__callStatic(self::SEARCH, []);
    }

    // phpcs:enable PSR1.Methods.CamelCapsMethodName.NotCamelCaps
}
