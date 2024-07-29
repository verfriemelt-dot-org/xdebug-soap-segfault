<?php

use PHPUnit\Framework\TestCase;

class Test extends TestCase {

    public static function setUpBeforeClass(): void
    {
        require_once dirname(__FILE__ , 2).'/src/Foo.php';
    }

    public function test(): void {

        $foo = new Foo();

    }
}
