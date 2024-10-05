<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');

//<!-- TASK 02 -->
//<!-- Выполните код в контейнере PHP CLI и объясните, что выведет данный код и почему: -->

// docker run --rm -v $(pwd)/php-cli/:/cli php:8.3-cli php /cli/task02.php

// OUTPUT:
// $a == $b                     => bool(true)   - результат сравнения 2-х переменных после неявного преобразования b из текста в число: значение типа bool:(5 == 5) -> true
// (int)'012345'                => int(12345)   - результат явного преобразования текста "012345" в число: целое число 12345
// (float)123.0 === (int)123.0  => bool(false)  - результат сравнения действительного и целого чисел после явного преобразования: значение типа bool:(123.0 === 123) -> false  
// 0 == 'hello, world'          => bool(false)  - результат сравнения числа 0 и текста: значение типа bool:false

//<!-- TASK 03 -->
//<!-- В контейнере с PHP CLI поменяйте версию PHP с 8.2 на 7.4. Изменится ли вывод? -->

// docker run --rm -v $(pwd)/php-cli/:/cli php:7.4-cli php /cli/task02.php

// OUTPUT:
// bool(true)   - без изменения
// int(12345)   - без изменения
// bool(false)  - без изменения
// bool(true)   - ИЗМЕНЕНИЕ: результат сравнения числа 0 и текста: значение типа bool:true, неявное преобразование текста в число дало 0