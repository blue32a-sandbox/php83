<?php

var_dump(range('9', 'A')); // ["9", ":", ";", "<", "=", ">", "?", "@", "A"]

// range(1, []); // TypeError: range(): Argument #2 ($end) must be of type string|int|float, array given
// range(1, 10, 0); // ValueError: range(): Argument #3 ($step) cannot be 0
// range(1, 10, -1); // ValueError: range(): Argument #3 ($step) must be greater than 0 for increasing ranges
