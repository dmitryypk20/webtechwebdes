<?php
echo '<html><body>';
echo 'Лабораторна робота #0101<br>';
echo 'Варіант 11<br>';
echo 'Завдання 5 <br>';
echo 'Знайти середнє арифметичне чисел одновимірного масиву. <br>';
$array = [2, 3, 4, 5, 6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
$sumArray = array_sum($array);
$count = count($array);
$average = $sumArray / $count;
echo "Cереднє арифметичне масиву = $average";
echo '</html>';
?>