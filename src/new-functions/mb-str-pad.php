<?php

var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_RIGHT)); // string(18) "▶▶❤❓❇❤"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_LEFT));  // string(18) "❤❓❇❤▶▶"
var_dump(mb_str_pad('▶▶', 6, '❤❓❇', STR_PAD_BOTH));  // string(18) "❤❓▶▶❤❓"

var_dump(mb_str_pad("🎉", 3, "祝", STR_PAD_LEFT));   // string(10) "祝祝🎉"
