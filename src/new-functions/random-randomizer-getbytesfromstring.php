<?php

$randomizer = new \Random\Randomizer();

for ($i = 0; $i < 10; $i++) {
    echo $randomizer->getBytesFromString(
        'abcdefghijklmnopqrstuvwxyz0123456789',
        10,
    ) . PHP_EOL;
}
