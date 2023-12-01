<?php

class C1 {
    public function hoge(): void {}
}

class C2 extends C1 {
    #[\Override]
    public function hoge(): void {}
}

class C3 extends C1 {
    #[\Override]
    public function hogee(): void {}
}
