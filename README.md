# maximaster/bitrix-enums

Предоставляет перечисления относящиеся к Битрикс, чтобы не использовать в коде
строки или числа или знать о перечислениях Битрикса не подключая сам Битрикс
(например для не-Битрикс проектов которые обращаются к Битрикс по API).

## Использование

Используйте константы и методы соответствующих классов, например:

```php
use Maximaster\BitrixEnums\Main\ModuleId;

CModule::IncludeModule(ModuleId::SALE);

function doSomething(ModuleId $moduleId): void {}
doSomething(ModuleId::SALE());
```

## Доработка библиотеки

* установите [devbox](https://www.jetify.com/devbox), либо самостоятельно
  воспроизведите окружение, которое через него описано (см. `devbox.json`);
* ответвитесь от версии, соответствующей версии Битрикс, где точно имеются
  перечисления используемые в доработке;
* убедитесь, что линтеры не выдают ошибок (`devbox run lint`).