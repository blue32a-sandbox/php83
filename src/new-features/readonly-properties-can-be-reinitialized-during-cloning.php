<?php

class PHP {
    public string $version = '8.2';
}

readonly class Foo {
    public function __construct(
        public PHP $php
    ) {}

    public function __clone(): void {
        $php = new PHP();
        $php->version = '8.3';
        $this->php = $php;
    }
}

$instance = new Foo(new PHP());
$cloned = clone $instance;

var_dump($instance->php->version);
var_dump($cloned->php->version);
