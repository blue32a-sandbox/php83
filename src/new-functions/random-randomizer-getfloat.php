<?php

$randomizer = new \Random\Randomizer();

for ($i = 0; $i < 10; $i++) {
    echo $randomizer->getFloat(0, 100, \Random\IntervalBoundary::ClosedClosed) . PHP_EOL;
}
