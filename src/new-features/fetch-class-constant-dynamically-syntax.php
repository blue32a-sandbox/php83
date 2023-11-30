<?php

namespace Sample;

class Hoge {
    const STR = 'hoge';
}

$value = 'STR';
$getValue = fn() => 'STR';

var_dump(Hoge::{$value});
var_dump(Hoge::{$getValue()});

$class = 'class';
var_dump(Hoge::{$class});

enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}

$suit = 'Hearts';
var_dump(Suit::{$suit}->value);
