<?php

interface HogeInterface {
    const string STR = 'foge';
}

trait HogeTrait {
    const int NUM = 1;
}

class HogeClass {
    use HogeTrait;
    const array CHARS = ['a', 'b', 'c'];
}

enum HogeEnum {
    const bool ACTIVE = true;
}

var_dump(HogeInterface::STR);
var_dump(HogeClass::NUM);
var_dump(HogeClass::CHARS);
var_dump(HogeEnum::ACTIVE);
