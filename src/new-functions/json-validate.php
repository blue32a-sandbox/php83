<?php

var_dump(json_validate('{ "test": { "foo": "bar" } }')); // true
var_dump(json_validate('{ "": "": "" } }')); // false
