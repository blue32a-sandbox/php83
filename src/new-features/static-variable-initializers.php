<?php

function bar() {
    echo "bar() called\n";
    return 1;
}

function foo() {
    static $i = bar();
    echo $i++, "\n";
}

foo();
// bar() called
// 1
foo();
// 2
foo();
// 3
