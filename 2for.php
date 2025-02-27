<?php
for ($i = 1; $i <= 100; $i++) {
    $prostoe = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            $prostoe = false;
            break;
        }
    }
    if ($prostoe) {
        echo $i . " ";
    }
}