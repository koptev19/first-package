## Калькулятор 4-х операций

Пакет содержит функции для калькуляции 4 операций: сложения, вычитания, умножения, деления.

## Требования

- PHP 7.4

## Установка

```bash
$ composer require andrey-koptev/first-package
```

## Использование

```php
<?php

$a = random_int(1, 100);
$b = random_int(1, 100);

$calc = new Calculator();

echo $calc->add($a, $b) . "\n";
echo $calc->sub($a, $b) . "\n";
echo $calc->mul($a, $b) . "\n";
echo $calc->div($a, $b) . "\n";
```
