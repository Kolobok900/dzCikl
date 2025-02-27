<?php
	$fact = readline("Введите число для факториала: ");
	$factorial = 1;
    $i = 1;
    while ($i <= $fact) {
        $factorial *= $i;
        $i++;
    }
    echo "Факториал равен = " . $factorial;
