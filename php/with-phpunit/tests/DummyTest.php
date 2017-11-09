<?php

declare(strict_types=1);

namespace MyNamespace\Tests;

use PHPUnit\Framework\TestCase;
use MyNamespace\Dummy;


final class DummyTest extends TestCase
{
    /** @test */
    public function dummy_test_fails()
    {
        $tested = new Dummy();

        static::assertTrue($tested->returnFalse());
    }
}
