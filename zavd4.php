<?php
echo '<html><body>';
echo 'Лабораторна робота #0101<br>';
echo 'Варіант 11<br>';
echo 'Завдання 3 <br>';
echo 'Задано натуральне число n. Скласти програму, яка змінює порядок цифр числа n на обернений. 
<br>';
$digits = 123456;
$digitsArr = str_split($digits);
$reversedDigitsArr = array_reverse($digitsArr);
$reversedNumbers = implode('', $reversedDigitsArr);
echo "Задане число: $digits <br>";
echo "Це ж число у зворотньому порядку: $reversedNumbers <br>";
echo '</html>';
?>