Установка
===

Устанавливаем зависимость:

```
composer require yii2module/yii2-summary
```

Создаем полномочие:

```
oExamlpe
```

Объявляем frontend модуль:

```php
return [
	'modules' => [
		// ...
		'summary' => 'yii2module\summary\frontend\Module',
		// ...
	],
];
```

Объявляем backend модуль:

```php
return [
	'modules' => [
		// ...
		'summary' => 'yii2module\summary\backend\Module',
		// ...
	],
];
```

Объявляем api модуль:

```php
return [
	'modules' => [
		// ...
		'summary' => 'yii2module\summary\api\Module',
		// ...
		'components' => [
            'urlManager' => [
                'rules' => [
                    ...
                   ['class' => 'yii\rest\UrlRule', 'controller' => ['{apiVersion}/summary' => 'summary/default']],
                    ...
                ],
            ],
        ],
	],
];
```

Объявляем консольный модуль:

```php
return [
	'modules' => [
		// ...
		'summary' => 'yii2module\summary\console\Module',
		// ...
	],
];
```

Объявляем домен:

```php
return [
	'components' => [
		// ...
		'summary' => 'yii2module\summary\domain\Domain',
		// ...
	],
];
```
