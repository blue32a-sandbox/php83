<?php

class Hoge {
    public function getValue() {
        return 'hoge';
    }
}

class Fuga extends Hoge {
    #[\Override]
    public function getValue() {
        return 'fuga';
    }
}

$fuga = new Fuga();
var_dump($fuga->getValue());
