<?php

namespace Test\Unit;

use Mockery;
use PHPUnit\Framework\TestCase;
use stdClass;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        Mockery::mock(stdClass::class)->shouldReceive('teste')->andReturn('true');
        $this->assertTrue(true);
    }
}

